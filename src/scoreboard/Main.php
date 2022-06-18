<?php

namespace scoreboard;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

  protected function onEnable(): void {
    $this->getScheduler()->scheduleRepeatingTask(new ScoreboardTask($this), 30);
  }

}