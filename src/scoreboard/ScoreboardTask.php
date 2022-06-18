<?php

namespace scoreboard;

use pocketmine\scheduler\Task;
use pocketmine\Server;

class ScoreboardTask extends Task {

  protected Main $plugin;

  public function __construct(Main $plugin) {
    $this->plugin = $plugin;
  }

  public function onRun(): void {
    foreach($this->plugin->getServer()->getOnlinePlayers() as $sender) {
      ScoreboardManager::new($sender, "ObjectiveName", "Votre scoreboard");
      ScoreboardManager::setLine($sender, 1, "§2Coucou");
      ScoreboardManager::setLine($sender, 2, "§e");
      ScoreboardManager::setLine($sender, 3, "§6monserver.fr");
    }
  }

}