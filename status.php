<?php
$config = include($_SERVER["DOCUMENT_ROOT"] . '/assets/config.php');

require_once($_SERVER["DOCUMENT_ROOT"] . "/assets/api/minestat.php");

$ms = new MineStat("monsterlifeserver-2020.work", 25565);
printf("Minecraft server status of MonsterLifeServer:<br>", $ms->get_address(), $ms->get_port());
if($ms->is_online())
{
  printf("Server is online running version %s with %s out of %s players.<br>", $ms->get_version(), $ms->get_current_players(), $ms->get_max_players());
  printf("Message of the day: %s<br>", $ms->get_motd());
  printf("Latency: %sms<br>", $ms->get_latency());
}
else
{
  printf("Server is offline!<br>");
}
?>