<?php
class Goodbye {
  const LEAVING_MESSAGE = "This sounds great ";

  public function byebye() {
    echo self::LEAVING_MESSAGE;
  }

}

$goodBye = new Goodbye();
$goodBye->byebye();
echo Goodbye::LEAVING_MESSAGE;
?>