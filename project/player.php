<?php
//Jacob Grossman - January 19, 2015
//Player Class to capture player data for presentation
class Player {
	private $name;
	private $gamesPlayed;
	private $fieldGoalPer;
	private $threePointPer;
	private $freeThrowPer;
	private $pointsPerGame;

	//Accepts paramenters for player stats. Handles nulls with no modification 
	public function __construct($playerName, $gp, $fgp, $tpp, $ftp, $ppg) {
		$this->name=$playerName;
		$this->gamesPlayed=$gp;
		$this->fieldGoalPer=$fgp;
		$this->threePointPer=$tpp;
		$this->freeThrowPer=$ftp;
		$this->pointsPerGame=$ppg;
	}


	public function getPlayerName() {
		return $this->name;
	}

	public function getGamesPlayed() {
		return $this->gamesPlayed;
	}

	public function getFieldGoalPercent() {
		return $this->fieldGoalPer;
	}

	public function getThreePointPercent() {
		return $this->threePointPer;
	}

	public function getFreeThrowPercent() {
		return $this->freeThrowPer;
	}

	public function getPointsPerGame() {
		return $this->pointsPerGame;
	}
}