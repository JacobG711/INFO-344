<?php

	function executeQuery() {

		$username = 'info344user';
		$password = 'Heresy3643';
		try {

			$conn = new PDO('mysql:host=info344rds.cqhcbf0qvnys.us-west-2.rds.amazonaws.com:3306;dbname=NBA_Players', $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

			$stmt = $conn->prepare('SELECT * FROM tblPlayer');
			$stmt->execute();
			$results = array();
			

			while($row = $stmt->fetch()) {
				$results[] = $row;
			}

			return $results;

		} catch(PDOException $e) {
			echo 'ERROR: ' . $e->getMessage();
		 }

	}

	function search($searchString, $a) {
		$searchResults = array();
		$searchString = trim(strtolower($searchString));
		foreach($a as $row) {
			$name = strtolower($row['PlayerName']);
			if($searchString == $name OR stripos($name, $searchString) !== false) {
				$player = new Player($row['PlayerName'], $row['GamesPlayed'], $row['FieldGoalPercent'], $row['ThreePercent'], $row['FreeThrowPercent'], $row['PointsPerGame']);
				$searchResults[] = $player;
			}
		}
		return $searchResults;
	}