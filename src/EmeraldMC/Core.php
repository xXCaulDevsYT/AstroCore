<php?

namespace EmeraldMC;

use EmeraldMC\anti\AntiAdvertising;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as C;

class Core extends PluginBase{
      
      public function onEnable() : void{
      $this->getServer()->getPluginManager()-registerEvents(($this->antiadvertising = new AntiAdvertising()), $this);
  }
}
