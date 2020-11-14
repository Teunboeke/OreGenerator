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

class Main extends PluginBase implements Listener{
  
      public function onEnable(){
             $this->getLogger()->info("§aLoading OreGenerator");
             $this->getServer()->getPluginManager()->registerEvents($this,$this);
      }
  
          public function onBlockSet(BlockUpdateEvent $event){
          $block = $event->getBlock();
          $water = false;
          $fence = false;
          for ($i = 2; $i <= 5; $i++) {
                   $nearBlock = $block->getSide($i); 
                   if ($nearBlock instanceof Water) {
                       $water = true;
                   } else if ($nearBlock instanceof Fence) {
                       $fence = true;
                   }
            if ($water && $fence) {
                $id = mt_rand(1, 30);
                switch ($id) {
                    case 16;
                          $newBlock = new IronOre();
                          break;
                    case 24;
                          $newBlock = new GoldOre();
                          break;
                    case 15;             
                           $newBlock = new EmeraldOre();
                           break;
                    case 27;
                           $newBlock = new CoalOre();
                           break;
                    case 26;
                           $newBlock = new RedstoneOre();
                           break;
                    case 22;                          
