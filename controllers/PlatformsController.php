<?php
session_start();
require_once "../models/PlatformsModel.php";

$controller = new PlatformsController();

$action =
	$_SERVER["REQUEST_METHOD"] === "POST"
		? $_POST["action"] ?? "read"
		: $_GET["action"] ?? "read";

$controller->handleRequest($action);

class PlatformsController
{
	private $model;

	public function __construct()
	{
		$this->model = new PlatformsModel();
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
			if (count($data) !== 2 || !isset($data["name"])) {
				$_SESSION["message"] = "error_fields";
				header("Location: /Platforms");
				exit();
			}
			$name = trim($data["name"]);
			if ($this->model->isNameExists($name)) {
				$_SESSION["message"] = "error_duplicate";
			} elseif (
				empty($name) ||
				strlen($name) < 2 ||
				strlen($name) > 20 ||
				!preg_match('/^[A-Za-z0-9\s.]+$/', $name)
			) {
				$_SESSION["message"] = "error";
			} else {
				$this->model->createPlatform($data);
				$_SESSION["message"] = "success";
			}
			header("Location: /Platforms");
			exit();
		} else {
			include "../views/Platforms/PlatformsListView.php";
		}
	}

	private function read()
	{
		$platforms = $this->model->getPlatforms();
		include "../views/Platforms/PlatformsListView.php";
	}

	private function update()
	{
		if ($_SERVER["REQUEST_METHOD"] === "POST") {
			$data = $_POST;
			$name = isset($data["name"]) ? trim($data["name"]) : "";
			$id = isset($data["id"]) ? $data["id"] : "";
			if (
				count($data) !== 3 ||
				!isset($data["name"]) ||
				!isset($data["id"])
			) {
				$_SESSION["message"] = "error_fields";
				header("Location: /Platforms");
				exit();
			}
			if (
				empty($name) ||
				strlen($name) < 2 ||
				strlen($name) > 20 ||
				!preg_match('/^[A-Za-z0-9\s.]+$/', $name)
			) {
				$_SESSION["message"] = "error_update";
			} else {
				$this->model->updatePlatform($data);
				$_SESSION["message"] = "success_update";
			}
			header("Location: /Platforms");
			exit();
		} else {
			include "./views/update_platform.php";
		}
	}

	private function delete()
	{
		if ($_SERVER["REQUEST_METHOD"] === "POST") {
			$data = $_POST;
			if (isset($data["id"]) && !empty($data["id"])) {
				$this->model->deletePlatform($data["id"]);
				$_SESSION["message"] = "success_delete";
			} else {
				$_SESSION["message"] = "error_delete";
			}
			header("Location: /Platforms");
			exit();
		} else {
			include "./views/update_platform.php";
		}
	}
}
?>
