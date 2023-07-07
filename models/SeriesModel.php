<?php
require_once "../config.php";

class SeriesModel
{
	private $db;

	public function __construct()
	{
		global $db;
		$this->db = $db;
	}

	public function createSerie($data, $array)
	{
		$title = $data["title"];
		$description = $data["description"];
		$stmt = $this->db->prepare(
			"INSERT INTO series (title, description) VALUES (?, ?)"
		);
		$stmt->execute([$title, $description]);
		$serieId = $this->db->lastInsertId();
		if (isset($array["Platforms"])) {
			foreach ($array["Platforms"] as $platformId) {
				$stmt = $this->db->prepare(
					"INSERT INTO series_platforms (series_id, platform_id) VALUES (?, ?)"
				);
				$stmt->execute([$serieId, $platformId]);
			}
		}
		if (isset($array["Actors"])) {
			foreach ($array["Actors"] as $actorId) {
				$stmt = $this->db->prepare(
					"INSERT INTO series_actors (series_id, actor_id) VALUES (?, ?)"
				);
				$stmt->execute([$serieId, $actorId]);
			}
		}
		if (isset($array["Directors"])) {
			foreach ($array["Directors"] as $directorId) {
				$stmt = $this->db->prepare(
					"INSERT INTO series_directors (series_id, director_id) VALUES (?, ?)"
				);
				$stmt->execute([$serieId, $directorId]);
			}
		}
		if (isset($array["Audio"])) {
			foreach ($array["Audio"] as $audioId) {
				$stmt = $this->db->prepare(
					"INSERT INTO series_languages_audio (series_id, language_audio_id) VALUES (?, ?)"
				);
				$stmt->execute([$serieId, $audioId]);
			}
		}
		if (isset($array["Subtitle"])) {
			foreach ($array["Subtitle"] as $subtitleId) {
				$stmt = $this->db->prepare(
					"INSERT INTO series_languages_subtitle (series_id, language_subtitle_id) VALUES (?, ?)"
				);
				$stmt->execute([$serieId, $subtitleId]);
			}
		}
	}

	public function getSeries()
	{
		$stmt = $this->db->query("SELECT * FROM series");
		$series = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $series;
	}

	public function getSeriesWithRelations()
	{
		$stmt = $this->db->query("SELECT * FROM series");
		$series = $stmt->fetchAll(PDO::FETCH_ASSOC);
		foreach ($series as &$serie) {
			$actorsStmt = $this->db->prepare(
				"SELECT actors.id, actors.name FROM actors JOIN series_actors ON actors.id = series_actors.actor_id WHERE series_actors.series_id = :series_id"
			);
			$actorsStmt->bindValue(":series_id", $serie["id"]);
			$actorsStmt->execute();
			$actors = $actorsStmt->fetchAll(PDO::FETCH_ASSOC);
			$serie["series_actors"] = $actors;
			$directorsStmt = $this->db->prepare(
				"SELECT directors.id, directors.name FROM directors JOIN series_directors ON directors.id = series_directors.director_id WHERE series_directors.series_id = :series_id"
			);
			$directorsStmt->bindValue(":series_id", $serie["id"]);
			$directorsStmt->execute();
			$directors = $directorsStmt->fetchAll(PDO::FETCH_ASSOC);
			$serie["series_directors"] = $directors;
			$platformsStmt = $this->db->prepare(
				"SELECT platforms.id, platforms.name FROM platforms JOIN series_platforms ON platforms.id = series_platforms.platform_id WHERE series_platforms.series_id = :series_id"
			);
			$platformsStmt->bindValue(":series_id", $serie["id"]);
			$platformsStmt->execute();
			$platforms = $platformsStmt->fetchAll(PDO::FETCH_ASSOC);
			$serie["series_platforms"] = $platforms;
			$audioStmt = $this->db->prepare(
				"SELECT languages.id, languages.name FROM languages JOIN series_languages_audio ON languages.id = series_languages_audio.language_audio_id WHERE series_languages_audio.series_id = :series_id"
			);
			$audioStmt->bindValue(":series_id", $serie["id"]);
			$audioStmt->execute();
			$audioLanguages = $audioStmt->fetchAll(PDO::FETCH_ASSOC);
			$serie["series_audio_languages"] = $audioLanguages;
			$subtitleStmt = $this->db->prepare(
				"SELECT languages.id, languages.name FROM languages JOIN series_languages_subtitle ON languages.id = series_languages_subtitle.language_subtitle_id WHERE series_languages_subtitle.series_id = :series_id"
			);
			$subtitleStmt->bindValue(":series_id", $serie["id"]);
			$subtitleStmt->execute();
			$subtitleLanguages = $subtitleStmt->fetchAll(PDO::FETCH_ASSOC);
			$serie["series_subtitle_languages"] = $subtitleLanguages;
		}
		return $series;
	}

	public function getData()
	{
		$stmtPlatforms = $this->db->prepare("SELECT id, name FROM platforms");
		$stmtPlatforms->execute();
		$platforms = $stmtPlatforms->fetchAll(PDO::FETCH_ASSOC);
		$data["platforms"] = $platforms;
		$stmtActors = $this->db->prepare("SELECT id, name FROM actors");
		$stmtActors->execute();
		$actors = $stmtActors->fetchAll(PDO::FETCH_ASSOC);
		$data["actors"] = $actors;
		$stmtDirectors = $this->db->prepare("SELECT id, name FROM directors");
		$stmtDirectors->execute();
		$directors = $stmtDirectors->fetchAll(PDO::FETCH_ASSOC);
		$data["directors"] = $directors;
		$stmtLanguages = $this->db->prepare("SELECT id, name FROM languages");
		$stmtLanguages->execute();
		$languages = $stmtLanguages->fetchAll(PDO::FETCH_ASSOC);
		$data["languages"] = $languages;
		return $data;
	}

	public function getSerieByTitle($title)
	{
		$stmt = $this->db->prepare("SELECT * FROM series WHERE title = ?");
		$stmt->execute([$title]);
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function updateSerie($data, $array)
	{
		$id = $data["id"];
		$title = $data["title"];
		$description = $data["description"];
		$stmt = $this->db->prepare(
			"UPDATE series SET title = ?, description = ? WHERE id = ?"
		);
		$stmt->execute([$title, $description, $id]);
		$stmt = $this->db->prepare(
			"DELETE FROM series_platforms WHERE series_id = ?"
		);
		$stmt->execute([$id]);
		$stmt = $this->db->prepare(
			"DELETE FROM series_actors WHERE series_id = ?"
		);
		$stmt->execute([$id]);
		$stmt = $this->db->prepare(
			"DELETE FROM series_directors WHERE series_id = ?"
		);
		$stmt->execute([$id]);
		$stmt = $this->db->prepare(
			"DELETE FROM series_languages_audio WHERE series_id = ?"
		);
		$stmt->execute([$id]);
		$stmt = $this->db->prepare(
			"DELETE FROM series_languages_subtitle WHERE series_id = ?"
		);
		$stmt->execute([$id]);
		if (isset($array["Platforms"])) {
			foreach ($array["Platforms"] as $platformId) {
				$stmt = $this->db->prepare(
					"INSERT INTO series_platforms (series_id, platform_id) VALUES (?, ?)"
				);
				$stmt->execute([$id, $platformId]);
			}
		}
		if (isset($array["Actors"])) {
			foreach ($array["Actors"] as $actorId) {
				$stmt = $this->db->prepare(
					"INSERT INTO series_actors (series_id, actor_id) VALUES (?, ?)"
				);
				$stmt->execute([$id, $actorId]);
			}
		}
		if (isset($array["Directors"])) {
			foreach ($array["Directors"] as $directorId) {
				$stmt = $this->db->prepare(
					"INSERT INTO series_directors (series_id, director_id) VALUES (?, ?)"
				);
				$stmt->execute([$id, $directorId]);
			}
		}
		if (isset($array["Audio"])) {
			foreach ($array["Audio"] as $audioId) {
				$stmt = $this->db->prepare(
					"INSERT INTO series_languages_audio (series_id, language_audio_id) VALUES (?, ?)"
				);
				$stmt->execute([$id, $audioId]);
			}
		}
		if (isset($array["Subtitle"])) {
			foreach ($array["Subtitle"] as $subtitleId) {
				$stmt = $this->db->prepare(
					"INSERT INTO series_languages_subtitle (series_id, language_subtitle_id) VALUES (?, ?)"
				);
				$stmt->execute([$id, $subtitleId]);
			}
		}
	}

	public function getColumnNames($tableName)
	{
		$stmt = $this->db->query("SELECT name FROM $tableName");
		$names = $stmt->fetchAll(PDO::FETCH_COLUMN);
		return $names;
	}

	public function deleteSerie($id)
	{
		$stmt = $this->db->prepare("DELETE FROM series WHERE id=?");
		$stmt->execute([$id]);
		$stmt = $this->db->prepare(
			"DELETE FROM series_platforms WHERE series_id=?"
		);
		$stmt->execute([$id]);
		$stmt = $this->db->prepare(
			"DELETE FROM series_directors WHERE series_id=?"
		);
		$stmt->execute([$id]);
		$stmt = $this->db->prepare(
			"DELETE FROM series_actors WHERE series_id=?"
		);
		$stmt->execute([$id]);
		$stmt = $this->db->prepare(
			"DELETE FROM series_languages_audio WHERE series_id=?"
		);
		$stmt->execute([$id]);
		$stmt = $this->db->prepare(
			"DELETE FROM series_languages_subtitle WHERE series_id=?"
		);
		$stmt->execute([$id]);
	}
}
?>
