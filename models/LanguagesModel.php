<?php
require_once "../config.php";

class LanguagesModel
{
	private $db;

	public function __construct()
	{
		global $db;
		$this->db = $db;
	}

	public function createLanguage($data)
	{
		$name = $data["name"];
		$iso_code = $data["iso_code"];
		$stmt = $this->db->prepare(
			"INSERT INTO languages (name, iso_code) VALUES (?, ?)"
		);
		$stmt->execute([$name, $iso_code]);
	}

	public function getLanguages()
	{
		$stmt = $this->db->query("SELECT * FROM languages");
		$languages = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $languages;
	}

	public function getLanguageByISOCode($iso_code)
	{
		$stmt = $this->db->prepare(
			"SELECT * FROM languages WHERE iso_code = ?"
		);
		$stmt->execute([$iso_code]);
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function updateLanguage($data)
	{
		$id = $data["id"];
		$name = $data["name"];
		$iso_code = $data["iso_code"];

		$stmt = $this->db->prepare(
			"UPDATE languages SET name=?, iso_code=? WHERE id=?"
		);
		$stmt->execute([$name, $iso_code, $id]);
	}

	public function deleteLanguage($id)
	{
		$stmt = $this->db->prepare("DELETE FROM languages WHERE id=?");
		$stmt->execute([$id]);
	}
}
?>
