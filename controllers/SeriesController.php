<?php
session_start();
require_once "../models/SeriesModel.php";

$controller = new SeriesController();

$action =
	$_SERVER["REQUEST_METHOD"] === "POST"
		? $_POST["action"] ?? "read"
		: $_GET["action"] ?? "read";

$controller->handleRequest($action);

class SeriesController
{
	private $model;

	public function __construct()
	{
		$this->model = new SeriesModel();
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
			$dataRelations = [];
			$workingValues = $data["workingValues"];
			$workingValuesArray = json_decode($workingValues, true);
			foreach ($workingValuesArray as $item) {
				$containerId = $item["containerId"];
				$values = $item["values"];
				$containerType = substr($containerId, strlen("done-list-"));
				$containerIds = [];
				foreach ($values as $value) {
					$id = substr($value, 0, strpos($value, " "));
					$containerIds[] = $id;
				}
				$dataRelations[$containerType] = $containerIds;
			}
			$title = isset($data["title"]) ? trim($data["title"]) : "";
			$description = isset($data["description"])
				? trim($data["description"])
				: "";
			$errors = [];
			$hasErrors = false;
			if (count($data) !== 5 || empty($title) || empty($description)) {
				array_push($errors, "One or more fields are missing or empty.");
				$hasErrors = true;
			}
			if (
				strlen($title) < 2 ||
				strlen($title) > 50 ||
				!preg_match('/^[A-Za-z0-9\s.]+$/', $title)
			) {
				array_push(
					$errors,
					"Invalid title. It should be alphanumeric and between 2 and 50 characters."
				);
				$hasErrors = true;
			}
			if (
				strlen($description) < 2 ||
				strlen($description) > 200 ||
				!preg_match('/^[A-Za-z0-9\s.]+$/', $description)
			) {
				array_push(
					$errors,
					"Invalid description. It should be alphanumeric and between 2 and 200 characters."
				);
				$hasErrors = true;
			}
			if (!empty($description)) {
				$existingSerie = $this->model->getSerieByTitle($title);
				if ($existingSerie) {
					array_push(
						$errors,
						"An serie with the provided title already exists."
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
				$_SESSION["message"] = "error";
				header("Location: /Series");
				exit();
			} else {
				$this->model->createSerie($data, $dataRelations);
				$_SESSION["message"] = "success";
				header("Location: /Series");
				exit();
			}
		} else {
			include "../views/Series/SeriesListView.php";
		}
	}

	private function read()
  {
    $series = $this->model->getSeriesWithRelations();
    $data = $this->model->getData();
    $relations = [
      "Series Platforms" => $series[0]["series_platforms"] ?? [],
      "Series Actors" => $series[0]["series_actors"] ?? [],
      "Series Directors" => $series[0]["series_directors"] ?? [],
      "Series Audio" => $series[0]["series_audio_languages"] ?? [],
      "Series Subtitle" => $series[0]["series_subtitle_languages"] ?? [],
    ];
    $generalData = [
      "Platforms" => $data["platforms"] ?? [],
      "Actors" => $data["actors"] ?? [],
      "Directors" => $data["directors"] ?? [],
      "Audio" => $data["languages"] ?? [],
      "Subtitle" => $data["languages"] ?? [],
    ];
    include "../views/Series/SeriesListView.php";
  }

	private function update()
	{
		if ($_SERVER["REQUEST_METHOD"] === "POST") {
			$data = $_POST;
			$dataRelations = [];
			$workingValues = $data["workingValuesUpdate"];
			$workingValuesArray = json_decode($workingValues, true);
			foreach ($workingValuesArray as $item) {
				$containerId = $item["containerId"];
				$values = $item["values"];
				$containerType = substr(
					$containerId,
					strlen("done-list-first-")
				);
				$containerIds = [];
				foreach ($values as $value) {
					$id = substr($value, 0, strpos($value, " "));
					$containerIds[] = $id;
				}
				$dataRelations[$containerType] = $containerIds;
			}
			$title = isset($data["title"]) ? trim($data["title"]) : "";
			$description = isset($data["description"])
				? trim($data["description"])
				: "";
			$errors = [];
			$hasErrors = false;
			if (count($data) !== 6 || empty($title) || empty($description)) {
				array_push($errors, "One or more fields are missing or empty.");
				$hasErrors = true;
			}
			if (
				strlen($title) < 2 ||
				strlen($title) > 50 ||
				!preg_match('/^[A-Za-z0-9\s.]+$/', $title)
			) {
				array_push(
					$errors,
					"Invalid title. It should be alphanumeric and between 2 and 50 characters."
				);
				$hasErrors = true;
			}
			if (
				strlen($description) < 2 ||
				strlen($description) > 200 ||
				!preg_match('/^[A-Za-z0-9\s.]+$/', $description)
			) {
				array_push(
					$errors,
					"Invalid description. It should be alphanumeric and between 2 and 200 characters."
				);
				$hasErrors = true;
			}
			if (!empty($description)) {
				$existingSerie = $this->model->getSerieByTitle($title);
				if ($existingSerie && $existingSerie["title"] != $title) {
					array_push(
						$errors,
						"An serie with the provided title already exists."
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
				header("Location: /Series");
				exit();
			} else {
				$this->model->updateSerie($data, $dataRelations);
				$_SESSION["message"] = "success_update";
				header("Location: /Series");
				exit();
			}
		} else {
			include "../views/Series/SeriesListView.php";
		}
	}

	private function delete()
	{
		if ($_SERVER["REQUEST_METHOD"] === "POST") {
			$data = $_POST;
			if (isset($data["id"]) && !empty($data["id"])) {
				$this->model->deleteSerie($data["id"]);
				$_SESSION["message"] = "success_delete";
			} else {
				$_SESSION["message"] = "error_delete";
			}
			header("Location: /Series");
			exit();
		} else {
			include "../views/Series/SeriesListView.php";
		}
	}
}
?>
