<?php
require_once "../config.php";

class DirectorsModel
{
	private $db;

	public function __construct()
	{
		global $db;
		$this->db = $db;
	}

	public function createDirector($data)
	{
		$name = $data["name"];
		$last_name = $data["last_name"];
		$date_of_birth = $data["date_of_birth"];
		$nationality = $data["nationality"];
		$dni = $data["dni"];
		$stmt = $this->db->prepare(
			"INSERT INTO directors (name, last_name, date_of_birth, nationality, dni) VALUES (?, ?, ?, ?, ?)"
		);
		$stmt->execute([$name, $last_name, $date_of_birth, $nationality, $dni]);
	}

	public function getDirectors()
	{
		$stmt = $this->db->query("SELECT * FROM directors");
		$directors = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $directors;
	}

	public function getDirectorByDNI($dni)
	{
		$stmt = $this->db->prepare("SELECT * FROM directors WHERE dni = ?");
		$stmt->execute([$dni]);
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function updateDirector($data)
	{
		$id = $data["id"];
		$name = $data["name"];
		$last_name = $data["last_name"];
		$date_of_birth = $data["date_of_birth"];
		$nationality = $data["nationality"];
		$dni = $data["dni"];

		$stmt = $this->db->prepare(
			"UPDATE directors SET name=?, last_name=?, date_of_birth=?, nationality=?, dni=? WHERE id=?"
		);
		$stmt->execute([
			$name,
			$last_name,
			$date_of_birth,
			$nationality,
			$dni,
			$id,
		]);
	}

	public function deleteDirector($id)
	{
		$stmt = $this->db->prepare("DELETE FROM directors WHERE id=?");
		$stmt->execute([$id]);
	}
}
?>
