<?php

namespace LiveWireTech\BasicPlugin;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class BasicPlugin extends PluginBase{
  public function onCommand(CommandSender $sender,Command $cmd, $label, array $args){
    $cmdName = $cmd->getName();
    if($cmdName === "greetme"){
      $sender->sendMessage("Sent a greetings message")
    }
    return true;
  }
  return false;
}

?>
