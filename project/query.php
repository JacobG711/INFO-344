<?php
//Jacob Grossman - January 19,2015 - INFO 344

	//This function connects to the database and queries tblPlayer.
	//Returns an array of the search results.
	function executeQuery() {

		$username = 'info344user';
		$password = 'Heresy3643';
		try {

			$conn = new PDO('mysql:host=info344rds.cqhcbf0qvnys.us-west-2.rds.amazonaws.com:3306;dbname=NBA_Players', $username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

			//Grabs all data in tblPlayer to save on filtering overhead
			$stmt = $conn->prepare('SELECT * FROM tblPlayer');
			$stmt->execute();
			$results = array();
			
			//readies data for filtering and builds array of data rows
			while($row = $stmt->fetch()) {
				$results[] = $row;
			}

			return $results;

		} catch(PDOException $e) {
			echo 'ERROR: ' . $e->getMessage();
		 }

	}

	//Filters data and finds search results
	//Accepts searchString and the query data, $a
	//Returns array of search results 
	function search($searchString, $a) {
		$searchResults = array();
		$searchString = trim(strtolower($searchString));
		//iterates through query data
		foreach($a as $row) {
			$name = strtolower($row['PlayerName']);
			//checks for exact match or if the search string is present in the query data. 
			if($searchString == $name OR stripos($name, $searchString) !== false) {
				//Player object added to search results array when a match is found
				$player = new Player($row['PlayerName'], $row['GamesPlayed'], $row['FieldGoalPercent'], $row['ThreePercent'], $row['FreeThrowPercent'], $row['PointsPerGame']);
				$searchResults[] = $player;
			}
		}
		return $searchResults;
	}