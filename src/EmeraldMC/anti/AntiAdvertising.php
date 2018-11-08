<php?

declare(strict_types=1);

namespace EmeraldMC\anti;

use pocketmine\utils\TextFormat;
use EmeraldMC\Core;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;

class AntiAdvertising implements Listener{

    /** @var array $links */
    private $links = [".cc", ".net", ".com", ".us", "co", ".co.uk", ".ddns", ".ddns.net", ".cf", ".me"];
    
    public function onChat(PlayerChatEvent $event) : void{
    $msg = $event->getMessage();
    $player = $event->getPlayer();
    foreach($this->links as $links){
    if(strpos($msg, $links) !== false){
    
    $player->sendMessage(TextFormat::RED . "[Anti]" TextFormat::GREEN . "No Advertising!");
    $event->setCancelled(true);
                           return;
                       }
                   }
               }
           }
