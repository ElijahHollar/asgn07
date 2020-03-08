<?php

class GameCharacter {

  private $playerName;
  private $score;

  public function get_player_name() {
    return $this->playerName;
  }

  public function set_player_name($playerName) {
    $this->playerName = $playerName;
  }

  public function get_score() {
    return $this->score;
  }

  public function set_score($score) {
    $this->score = $score;
  }
}

?>