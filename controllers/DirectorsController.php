<?php
session_start();
require_once "../models/DirectorsModel.php";

$controller = new DirectorsController();

$action =
	$_SERVER["REQUEST_METHOD"] === "POST"
		? $_POST["action"] ?? "read"
		: $_GET["action"] ?? "read";

$controller->handleRequest($action);

class DirectorsController
{
	private $model;

	public function __construct()
	{
		$this->model = new DirectorsModel();
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
			$last_name = isset($data["last_name"])
				? trim($data["last_name"])
				: "";
			$date_of_birth = isset($data["date_of_birth"])
				? trim($data["date_of_birth"])
				: "";
			$nationality = isset($data["nationality"])
				? trim($data["nationality"])
				: "";
			$dni = isset($data["dni"]) ? trim($data["dni"]) : "";
			$errors = [];
			$hasErrors = false;
			if (
				count($data) !== 6 ||
				empty($name) ||
				empty($last_name) ||
				empty($date_of_birth) ||
				empty($nationality) ||
				empty($dni)
			) {
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
					"Invalid name. It should be alphanumeric and between 5 and 20 characters."
				);
				$hasErrors = true;
			}
			if (
				strlen($last_name) < 2 ||
				strlen($last_name) > 20 ||
				!preg_match('/^[A-Za-z0-9\s.]+$/', $last_name)
			) {
				array_push(
					$errors,
					"Invalid last name. It should be alphanumeric and between 5 and 20 characters."
				);
				$hasErrors = true;
			}
			$currentDate = new DateTime();
			$minAge = 18;
			$maxAge = 70;
			$minDate = $currentDate
				->sub(new DateInterval("P" . $maxAge . "Y"))
				->format("Y-m-d");
			$maxDate = $currentDate
				->add(new DateInterval("P" . ($maxAge - $minAge) . "Y"))
				->format("Y-m-d");
			$date = DateTime::createFromFormat("Y-m-d", $date_of_birth);
			if (
				!$date ||
				$date > new DateTime($maxDate) ||
				$date < new DateTime($minDate)
			) {
				array_push(
					$errors,
					"Invalid date of birth. It should be in the format YYYY-MM-DD and within the age range of " .
						$minAge .
						" to " .
						$maxAge .
						" years old."
				);
				$hasErrors = true;
				$_SESSION["message"] = "error";
			}
			if (
				strlen($nationality) < 4 ||
				strlen($nationality) > 20 ||
				!preg_match('/^[A-Za-z0-9\s.]+$/', $nationality)
			) {
				array_push(
					$errors,
					"Invalid nationality. It should be alphanumeric and between 5 and 20 characters."
				);
				$hasErrors = true;
				$_SESSION["message"] = "error";
			}
			if (!empty($dni)) {
				$existingDirector = $this->model->getDirectorByDNI($dni);
				if ($existingDirector) {
					array_push(
						$errors,
						"An director with the provided DNI already exists."
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
				header("Location: /Directors");
				exit();
			} else {
				$this->model->createDirector($data);
				$_SESSION["message"] = "success";
				header("Location: /Directors");
				exit();
			}
		} else {
			include "../views/Directors/DirectorsListView.php";
		}
	}

	private function read()
	{
		$directors = $this->model->getDirectors();
		include "../views/Directors/DirectorsListView.php";
	}

	private function update()
	{
		if ($_SERVER["REQUEST_METHOD"] === "POST") {
			$data = $_POST;
			$name = isset($data["name"]) ? trim($data["name"]) : "";
			$last_name = isset($data["last_name"])
				? trim($data["last_name"])
				: "";
			$date_of_birth = isset($data["date_of_birth"])
				? trim($data["date_of_birth"])
				: "";
			$nationality = isset($data["nationality"])
				? trim($data["nationality"])
				: "";
			$dni = isset($data["dni"]) ? trim($data["dni"]) : "";
			$errors = [];
			$hasErrors = false;
			if (
				count($data) !== 7 ||
				empty($name) ||
				empty($last_name) ||
				empty($date_of_birth) ||
				empty($nationality) ||
				empty($dni)
			) {
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
					"Invalid name. It should be alphanumeric and between 5 and 20 characters."
				);
				$hasErrors = true;
			}
			if (
				strlen($last_name) < 2 ||
				strlen($last_name) > 20 ||
				!preg_match('/^[A-Za-z0-9\s.]+$/', $last_name)
			) {
				array_push(
					$errors,
					"Invalid last name. It should be alphanumeric and between 5 and 20 characters."
				);
				$hasErrors = true;
			}
			$currentDate = new DateTime();
			$minAge = 18;
			$maxAge = 70;
			$minDate = $currentDate
				->sub(new DateInterval("P" . $maxAge . "Y"))
				->format("Y-m-d");
			$maxDate = $currentDate
				->add(new DateInterval("P" . ($maxAge - $minAge) . "Y"))
				->format("Y-m-d");
			$date = DateTime::createFromFormat("Y-m-d", $date_of_birth);
			if (
				!$date ||
				$date > new DateTime($maxDate) ||
				$date < new DateTime($minDate)
			) {
				array_push(
					$errors,
					"Invalid date of birth. It should be in the format YYYY-MM-DD and within the age range of " .
						$minAge .
						" to " .
						$maxAge .
						" years old."
				);
				$hasErrors = true;
				$_SESSION["message"] = "error";
			}
			if (
				strlen($nationality) < 4 ||
				strlen($nationality) > 20 ||
				!preg_match('/^[A-Za-z0-9]+$/', $nationality)
			) {
				array_push(
					$errors,
					"Invalid nationality. It should be alphanumeric and between 5 and 20 characters."
				);
				$hasErrors = true;
				$_SESSION["message"] = "error";
			}
			if (!empty($dni)) {
				$existingDirector = $this->model->getDirectorByDNI($dni);
				if ($existingDirector && $existingDirector["DNI"] != $dni) {
					array_push(
						$errors,
						"An director with the provided DNI already exists."
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
				header("Location: /Directors");
				exit();
			} else {
				$this->model->updateDirector($data);
				$_SESSION["message"] = "success_update";
				header("Location: /Directors");
				exit();
			}
		} else {
			include "../views/Directors/DirectorsListView.php";
		}
	}

	private function delete()
	{
		if ($_SERVER["REQUEST_METHOD"] === "POST") {
			$data = $_POST;
			if (isset($data["id"]) && !empty($data["id"])) {
				$this->model->deleteDirector($data["id"]);
				$_SESSION["message"] = "success_delete";
			} else {
				$_SESSION["message"] = "error_delete";
			}
			header("Location: /Directors");
			exit();
		} else {
			include "../views/Directors/DirectorsListView.php";
		}
	}
}
?>
