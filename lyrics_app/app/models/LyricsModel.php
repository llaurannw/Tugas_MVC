<?php
class LyricsModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function addLyrics($name, $lyrics) {
        $stmt = $this->conn->prepare("INSERT INTO lyrics (name, lyrics) VALUES (?, ?)");
        $stmt->bind_param("ss", $name, $lyrics);
        return $stmt->execute();
    }

    public function getAllLyrics() {
        $sql = "SELECT name, lyrics FROM lyrics ORDER BY created_at DESC";
        $result = $this->conn->query($sql);
        $lyrics = [];
        while ($row = $result->fetch_assoc()) {
            $lyrics[] = $row;
        }
        return $lyrics;
    }

    public function searchLyricsByName($name) {
        $stmt = $this->conn->prepare("SELECT name, lyrics FROM lyrics WHERE name LIKE ?");
        $searchName = "%" . $name . "%";
        $stmt->bind_param("s", $searchName);
        $stmt->execute();
        $result = $stmt->get_result();
        $lyrics = [];
        while ($row = $result->fetch_assoc()) {
            $lyrics[] = $row;
        }
        return $lyrics;
    }
}
?>
