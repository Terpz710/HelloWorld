<?php

namespace Terpz710\HelloWorld;

use Pocketmine\plugin\PluginBase;

class Main extends PluginBase {

    public function onEnable(): void {
        $this->getLogger()->info("Hello World!");
    }
}
