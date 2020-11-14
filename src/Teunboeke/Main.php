<?php

namespace Teunboeke\Main
  
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\math\Vector3;
use pocketmine\Player;
use pocketmine\event\block\BlockUpdateEvent;
use pocketmine\item\Item;
use pocketmine\event\Listener;
use pocketmine\level\Level;
use pocketmine\block\Block;
use pocketmine\block\Iron;
use pocketmine\block\Cobblestone;
use pocketmine\block\Diamond;
use pocketmine\block\Emerald;
use pocketmine\block\Gold;
use pocketmine\block\Coal;
use pocketmine\block\Fence;
use pocketmine\block\Lapis;
use pocketmine\block\Redstone;
use pocketmine\block\Water;
use pocketmine\block\LapisOre;
use pocketmine\block\RedstoneOre;
use pocketmine\block\DiamondOre;
use pocketmine\block\GoldOre;
use pocketmine\block\IronOre;
use pocketmine\block\EmeraldOre;
use pocketmine\block\CoalOre;
