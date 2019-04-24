<?php
class Review {
  private $charaName;
  private $userId;
  private $body;

  public function __construct($charaName, $userId, $body) {
    $this->charaName = $charaName;
    $this->userId = $userId;
    $this->body = $body;
  }

  public function getCharaName() {
    return $this->charaName;
  }

  public function getBody() {
    return $this->body;
  }
  
  public function getUser($users) {
    foreach ($users as $user) {
      if ($user->getId() == $this->userId) {
        return $user;
      }
    }
  }
  
}

?>