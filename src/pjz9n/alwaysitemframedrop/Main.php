<?php

/**
 * Copyright (c) 2020 PJZ9n.
 *
 * This file is part of AlwaysItemFrameDrop.
 *
 * AlwaysItemFrameDrop is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * AlwaysItemFrameDrop is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with AlwaysItemFrameDrop. If not, see <http://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace pjz9n\alwaysitemframedrop;

use pocketmine\block\ItemFrame;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener
{
    public function onEnable(): void
    {
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    /**
     * @priority HIGHEST
     */
    public function onItemFrameDrop(PlayerInteractEvent $event): void
    {
        if ($event->getAction() !== PlayerInteractEvent::LEFT_CLICK_BLOCK
            || !($event->getBlock() instanceof ItemFrame)) return;
        $event->setCancelled(false);
    }
}
