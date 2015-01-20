<?php

class Player {
	private $name;
	private $gamesPlayed;
	private $fieldGoalPer;
	private $threePointPer;
	private $freeThrowPer;
	private $pointsPerGame;

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