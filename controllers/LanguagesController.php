<?php
session_start();
require_once "../models/LanguagesModel.php";

$controller = new LanguagesController();

$action =
	$_SERVER["REQUEST_METHOD"] === "POST"
		? $_POST["action"] ?? "read"
		: $_GET["action"] ?? "read";

$controller->handleRequest($action);

class LanguagesController
{
	private $model;

	public function __construct()
	{
		$this->model = new LanguagesModel();
	}

	public function handleRequest($action)
	{
		switch ($action) {
			case "create":
				$this->create();
				break;
			case "read":
				$this->read();
				break;
			case "update":
				$this->update();
				break;
			case "delete":
				$this->delete();
				break;
			default:
				break;
		}
	}

	private function create()
	{
		if ($_SERVER["REQUEST_METHOD"] === "POST") {
			$data = $_POST;
			$name = isset($data["name"]) ? trim($data["name"]) : "";
			$iso_code = isset($data["iso_code"]) ? trim($data["iso_code"]) : "";
			$errors = [];
			$hasErrors = false;
			if (count($data) !== 3 || empty($name) || empty($iso_code)) {
				array_push($errors, "One or more fields are missing or empty.");
				$hasErrors = true;
			}
			if (
				strlen($name) < 2 ||
				strlen($name) > 20 ||
				!preg_match('/^[A-Za-z0-9\s.]+$/', $name)
			) {
				array_push(
					$errors,
					"Invalid name. It should be alphanumeric and between 2 and 20 characters."
				);
				$hasErrors = true;
			}
			if (!empty($iso_code)) {
				$existingLanguage = $this->model->getLanguageByISOCode(
					$iso_code
				);
				if ($existingLanguage) {
					array_push(
						$errors,
						"An language with the provided ISOCode already exists."
					);
					$_SESSION["message"] = "error_duplicate";
					$hasErrors = true;
				}
			}
			if ($hasErrors) {
				if (isset($_SESSION["errors"])) {
					$errors = array_merge($_SESSION["errors"], $errors);
				}
				$_SESSION["errors"] = $errors;
				header("Location: /Languages");
				exit();
			} else {
				$this->model->createLanguage($data);
				$_SESSION["message"] = "success";
				header("Location: /Languages");
				exit();
			}
		} else {
			include "../views/Languages/LanguagesListView.php";
		}
	}

	private function read()
	{
		$languages = $this->model->getLanguages();
		include "../views/Languages/LanguagesListView.php";
	}

	private function update()
	{
		if ($_SERVER["REQUEST_METHOD"] === "POST") {
			$data = $_POST;
			$name = isset($data["name"]) ? trim($data["name"]) : "";
			$iso_code = isset($data["iso_code"]) ? trim($data["iso_code"]) : "";
			$errors = [];
			$hasErrors = false;
			if (count($data) !== 4 || empty($name) || empty($iso_code)) {
				array_push($errors, "One or more fields are missing or empty.");
				$hasErrors = true;
			}
			if (
				strlen($name) < 2 ||
				strlen($name) > 20 ||
				!preg_match('/^[A-Za-z0-9\s.]+$/', $name)
			) {
				array_push(
					$errors,
					"Invalid name. It should be alphanumeric and between 2 and 20 characters."
				);
				$hasErrors = true;
			}
			if (!empty($iso_code)) {
				$existingLanguage = $this->model->getLanguageByISOCode(
					$iso_code
				);
				if (
					$existingLanguage &&
					$existingLanguage["iso_code"] != $iso_code
				) {
					array_push(
						$errors,
						"An language with the provided ISOCode already exists."
					);
					$_SESSION["message"] = "error_update_duplicate";
					$hasErrors = true;
				}
			}
			if ($hasErrors) {
				if (isset($_SESSION["errors"])) {
					$errors = array_merge($_SESSION["errors"], $errors);
				}
				$_SESSION["errors"] = $errors;
				header("Location: /Languages");
				exit();
			} else {
				$this->model->updateLanguage($data);
				$_SESSION["message"] = "success_update";
				header("Location: /Languages");
				exit();
			}
		} else {
			include "../views/Languages/LanguagesListView.php";
		}
	}

	private function delete()
	{
		if ($_SERVER["REQUEST_METHOD"] === "POST") {
			$data = $_POST;
			if (isset($data["id"]) && !empty($data["id"])) {
				$this->model->deleteLanguage($data["id"]);
				$_SESSION["message"] = "success_delete";
			} else {
				$_SESSION["message"] = "error_delete";
			}
			header("Location: /Languages");
			exit();
		} else {
			include "../views/Languages/LanguagesListView.php";
		}
	}
}
?>
