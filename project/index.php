<html>
<head>
	<title>NBA Player Stats &amp; Search</title>
	<?php 
		include 'player.php';
		include 'query.php'
	?>
	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<!--<link rel="stylesheet" type="text/css" href="css/reset.css">-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

<div id="wrapper">
	<div id="header">

		<h1>NBA Player Stats</h1>

	</div>

	<div id="SearchBox">
		<form class="form-inline" action="index.php" method="GET" name="search">

			<input id="searchBox" type="text" class="form-control" placeholder="Player Name" autofocus="on" name="player">

			<input type="submit" class="btn btn-default" value="Submit">

		</form> 
	</div>

	<div id="results">
		<?php

			if(isset($_GET["player"])) {
				$a = executeQuery();
				$searchResults = search($_GET["player"], $a);

				if(count($searchResults) >= 1) {
					foreach($searchResults as $player){
		?>
						<div class="singlePlayer">
							<h2 class="playerName"><?php print($player->getPlayerName()); ?></h2>
							<table class="table table-bordered">
								<tbody>
									<tr>
										<th>GP</th>
										<th>FG %</th>
										<th>TP %</th>
										<th>FT %</th>
										<th>PPG</th>
									</tr>
									<tr>
										<td class="stats"><?php print($player->getGamesPlayed()); ?></td>
										<td class="stats"><?php print($player->getFieldGoalPercent()); ?></td>
										<td class="stats"><?php print($player->getThreePointPercent()); ?></td>
										<td class="stats"><?php print($player->getFreeThrowPercent()); ?></td>
										<td class="stats"><?php print($player->getPointsPerGame()); ?></td>
									</tr>
								</tbody>
							<table>
						</div>
		<?php		}
				
				}  else {
					print("<p id='noResult'> No Search Results Found");
				}
			}

		?>

	</div>


</div>



</body>
</html>