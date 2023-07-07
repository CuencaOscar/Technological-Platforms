<?php
require_once "../config.php";

class ActorsModel
{
	private $db;

	public function __construct()
	{
		global $db;
		$this->db = $db;
	}

	public function createActor($data)
	{
		$name = $data["name"];
		$last_name = $data["last_name"];
		$date_of_birth = $data["date_of_birth"];
		$nationality = $data["nationality"];
		$dni = $data["dni"];
		$stmt = $this->db->prepare(
			"INSERT INTO actors (name, last_name, date_of_birth, nationality, dni) VALUES (?, ?, ?, ?, ?)"
		);
		$stmt->execute([$name, $last_name, $date_of_birth, $nationality, $dni]);
	}

	public function getActors()
	{
		$stmt = $this->db->query("SELECT * FROM actors");
		$actors = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $actors;
	}

	public function getActorByDNI($dni)
	{
		$stmt = $this->db->prepare("SELECT * FROM actors WHERE dni = ?");
		$stmt->execute([$dni]);
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function updateActor($data)
	{
		$id = $data["id"];
		$name = $data["name"];
		$last_name = $data["last_name"];
		$date_of_birth = $data["date_of_birth"];
		$nationality = $data["nationality"];
		$dni = $data["dni"];

		$stmt = $this->db->prepare(
			"UPDATE actors SET name=?, last_name=?, date_of_birth=?, nationality=?, dni=? WHERE id=?"
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

	public function deleteActor($id)
	{
		$stmt = $this->db->prepare("DELETE FROM actors WHERE id=?");
		$stmt->execute([$id]);
	}
}
?>
