<?php
require_once "../config.php";

class PlatformsModel
{
	private $db;

	public function __construct()
	{
		global $db;
		$this->db = $db;
	}

	public function isNameExists($name)
	{
		$query = "SELECT COUNT(*) as count FROM platforms WHERE name = :name";
		$params = [":name" => $name];
		$stmt = $this->db->prepare($query);
		$stmt->execute($params);
		$result = $stmt->fetch(PDO::FETCH_ASSOC);

		return $result["count"] > 0;
	}

	public function createPlatform($data)
	{
		$name = $data["name"];

		$stmt = $this->db->prepare("INSERT INTO platforms (name) VALUES (?)");
		$stmt->execute([$name]);
	}

	public function getPlatforms()
	{
		$stmt = $this->db->query("SELECT * FROM platforms");
		$platforms = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $platforms;
	}

	public function updatePlatform($data)
	{
		$id = $data["id"];
		$name = $data["name"];

		$stmt = $this->db->prepare("UPDATE platforms SET name=? WHERE id=?");
		$stmt->execute([$name, $id]);
	}

	public function deletePlatform($id)
	{
		$stmt = $this->db->prepare("DELETE FROM platforms WHERE id=?");
		$stmt->execute([$id]);
	}
}
?>
