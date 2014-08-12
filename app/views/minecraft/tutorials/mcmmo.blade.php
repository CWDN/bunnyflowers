@extends('layouts.minecraft-tutorials')

@section('title')
<h1>Tutorials - mcMMO</h1>
@overwrite

@section('header-options')
<li><a class="blue-hover" href="/minecraft"><i class="fa fa-home"></i>Home</a></li>
<li><a class="blue-hover" href="/minecraft/tutorials"><i class="fa fa-arrow-left"></i>Back</a></li>
@stop

@section('content')
     @include('partials.sidenav', array(
        'options' => array(
            'Command Reference',
            'Mining Skill',
            'Smelting Skill',
            'Woodcutting Skill',
            'Herbalism Skill',
            'Excavation Skill',
            'Fishing Skill',
            'Unarmed Skill',
            'Archery Skill',
            'Swords Skill',
            'Axes Skill',
            'Taming Skill',
            'Repair Skill',
            'Acrobatics Skill',
            'Alchemy Skill'),
        'anchors' => array(
            '#command',
            '#mining',
            '#smelting',
            '#woodcutting',
            '#herbalism',
            '#excavation',
            '#fishing',
            '#unarmed',
            '#archery',
            '#swords',
            '#axes',
            '#taming',
            '#repair',
            '#acrobatics',
            '#alchemy')
        ))

    <div class="steps">

        <div class="step">
            @include('partials.command', array(
            'commands' => array(
                '/mcrank',
                '/mcstats',
                '/&#60;skill&#62;',
                '/mctop &#60;skill&#62;(optional) &#60;page&#62;(optional)',
                '/inspect &#60;player&#62;'),
            'descriptions' => array(
                'View your rank for each skill.',
                'View your level for each skill.',
                'View detailed info about the skill.',
                'View the leaderboards overall and for specific skills.',
                'View the levels of a specific player.'),

            'alias' => 'Commands relating to the your skills and levels. These can be found in game using <span>/mcmmo help</span>.',
            'moreinfo' => 'http://mcmmo.wikia.com/wiki/McMMO_Wiki'
            ))
        </div>

        <div class="step">
            <?php $image = '/images/mcmmo/Mining.png'; ?>
            @include('partials.category', array(
                    'title' => 'Mining',
                    'description' => '<p class="box">Experience is gained by breaking mineable block with a pickaxe</p>
                                    <div class="ability box">
                                        <h4>Abilities</h4>
                                        <h5>Super Breaker</h5>
                                        <p>This can be activated by right clicking, whilst holding a pickaxe. It enables you to mine much faster for a short period of time.</p>
                                        <h5>Blast Mining</h5>
                                        <p>This ability means that when you mine using tnt you will get more ores and less debris</p>
                                        <h5>Double Drops</h5>
                                        <p>This is a passive ability that offer a chance of dropping two ores instead of one. The chance increase with your level.</p>
                                        <a href="http://mcmmo.wikia.com/wiki/Mining" target="_blank">Click here to find out more information</a>
                                    </div>',
                    'anchor' => 'mining'))

        </div>

        <div class="step">
            <?php $image = '/images/mcmmo/Smelting.png'; ?>
            @include('partials.category', array(
                    'title' => 'Smelting',
                    'description' => '<p class="box">Smelting is a child skill and is based entirely upon your mining skill.</p>
                                    <div class="ability box">
                                        <h4>Abilities</h4>
                                        <h5>Fuel Duration</h5>
                                        <p>As your skill increases the duration that fuel will last for increases.</p>
                                        <h5>Flux Mining</h5>
                                        <p>This ability means that there is a 33.3% chance of you auto smelting as you mine, receiving an ingot in place of the ore. This ability is unlocked at level 250.</p>
                                        <a href="http://mcmmo.wikia.com/wiki/Smelting" target="_blank">Click here to find out more information</a>
                                    </div>',
                    'anchor' => 'smelting'))

        </div>

        <div class="step">
            <?php $image = '/images/mcmmo/Woodcutting.png'; ?>
            @include('partials.category', array(
                    'title' => 'Woodcutting',
                    'description' => '<p class="box">Experience is gained by breaking naturally generated logs (not player placed)</p>
                                    <div class="ability box">
                                        <h4>Abilities</h4>
                                        <h5>Tree Feller</h5>
                                        <p>This can be activated by right clicking, whilst holding an axe. It will enable you to cut down whole trees, instantly dropping all the logs and saplings.</p>
                                        <h5>Lead Blower</h5>
                                        <p>This is a passive ability that allow you to istantly break leaves with an axe. This ability is unlocked at level 100.</p>
                                        <h5>Double Drops</h5>
                                        <p>This is a passive ability that offers a chance of dropping two logs instead of one. The chance increases with your level.</p>
                                        <a href="http://mcmmo.wikia.com/wiki/Woodcutting" target="_blank">Click here to find out more information</a>
                                    </div>',
                    'anchor' => 'woodcutting'))

        </div>

        <div class="step">
            <?php $image = '/images/mcmmo/Herbalism.png'; ?>
            @include('partials.category', array(
                    'title' => 'Herbalism',
                    'description' => '<p class="box">Experience is gained by harvesting plants and crops.</p>
                                    <div class="ability box">
                                        <h4>Abilities</h4>
                                        <h5>Green Thumb</h5>
                                        <p>When harvesting there is a chance to replant. Replanting will use an item from your inventory, i.e. harvesting wheat will replant a seed.</p>
                                        <h5>Shroom Thumb</h5>
                                        <p>When you use mushroom on a dirt block there is a low chance it will turn into mycelium. This will consume a red and a brown mushroom, so it is required to have one of each in your inventory.</p>
                                        <h5>Farmers Diet</h5>
                                        <p>This is a passive ability that the amount of hunger that eating farmed food regens. It scales as your level increases.</p>
                                        <h5>Double Drops</h5>
                                        <p>This is a passive ability that offers a chance of dropping two items when farming instead of one. The chance increases with your level.</p>
                                        <a href="http://mcmmo.wikia.com/wiki/Herbalism" target="_blank">Click here to find out more information</a>
                                    </div>',
                    'anchor' => 'herbalism'))

        </div>

        <div class="step">
            <?php $image = '/images/mcmmo/Excavation.png'; ?>
            @include('partials.category', array(
                    'title' => 'Excavation',
                    'description' => '<p class="box">Experience is gained by breaking diggable blocks with a shovel.</p>
                                    <div class="ability box">
                                        <h4>Abilities</h4>
                                        <h5>Giga Drill Breaker</h5>
                                        <p>This can be activated by right clicking, whilst holding a shovel. It will enable you to instantly break blocks that are harvested using a shovel.</p>
                                        <h5>Treasure Hunt</h5>
                                        <p>As your level increases you unlock the ability to find special items when digging blocks. An example is a slim chance of finding glowstone when breaking dirt. A full list can be found by clicking the link below.</p>
                                        <a href="http://mcmmo.wikia.com/wiki/Excavation" target="_blank">Click here to find out more information</a>
                                    </div>',
                    'anchor' => 'excavation'))

        </div>

        <div class="step">
            <?php $image = '/images/mcmmo/Fishing.png'; ?>
            @include('partials.category', array(
                    'title' => 'Fishing',
                    'description' => '<p class="box">Experience is gained by catching fish or treasures.</p>
                                    <div class="ability box">
                                        <h4>Abilities</h4>
                                        <h5>Master Angler</h5>
                                        <p>This is passive ability unlocked at level 125. It offer ways to increase the chance of getting a fish to bite. The first is by being in a ocean/river biome or in a boat (these stack). Being in the rain can also increase the bite chance.</p>
                                        <h5>Fisherman\'s Diet</h5>
                                        <p>This is a passive ability that increase the amount of hunger that eating fish regens. It scales as your level increases.</p>
                                        <h5>Shake Loose</h5>
                                        <p>This ability means that when you hook a mob (friendly or hostile) with a fishing rod there is a chance you can make them drops items. This ability is unlocked at level 150.</p>
                                        <h5>Treasure Hunter / Magic Hunter</h5>
                                        <p>This is a passive ability that means when fishing you have a random chance to get a treasure item. There is also a possibility for an item you find to be enchanted. For a full list of the items you can find and the fishing level required click the link below.</p>
                                        <a href="http://mcmmo.wikia.com/wiki/Fishing" target="_blank">Click here to find out more information</a>
                                    </div>',
                    'anchor' => 'fishing'))

        </div>

        <div class="step">
            <?php $image = '/images/mcmmo/Unarmed.png'; ?>
            @include('partials.category', array(
                    'title' => 'Unarmed',
                    'description' => '<p class="box">Experience is gained by attacking mobs and players with nothing in your hand.</p>
                                    <div class="ability box">
                                        <h4>Abilities</h4>
                                        <h5>Berserker</h5>
                                        <p>To activate this skill right click while holding nothing and attack a player or mob. It will increase your damage output by 50% for a limited time as well as allow you to destroy weaker blocks instantly.</p>
                                        <h5>Iron Arm Style</h5>
                                        <p>This is a passive ability that will increase the amount of extra damage you do when unarmed by 1 damage / &#189; heart every 50 levels. By default you do 3 extra damage / 1 &#189; hearts (as well as the 1 damage / &#189; heart by default) with your fists. This will cap at 9 extra damage / 4 &#189; hearts.</p>
                                        <h5>Arrow Deflect</h5>
                                        <p>This gives you a passive chance of blocking an arrow that was fired at you. This scales as you level the skill.</p>
                                        <h5>Disarm</h5>
                                        <p>This is the passive chance to knock your opponent\'s weapon out of their hand. This ability has the potentials to be blocked depending on your opponents skill level (known as Iron Grip). This scales as you level the skill.</p>
                                        <a href="http://mcmmo.wikia.com/wiki/Unarmed" target="_blank">Click here to find out more information</a>
                                    </div>',
                    'anchor' => 'unarmed'))

        </div>

        <div class="step">
            <?php $image = '/images/mcmmo/Archery.png'; ?>
            @include('partials.category', array(
                    'title' => 'Archery',
                    'description' => '<p class="box">Experience is gained by attacking mobs and players with a bow.</p>
                                    <div class="ability box">
                                        <h4>Abilities</h4>
                                        <h5>Daze</h5>
                                        <p>This is a passive ability that has the chance to cause the opponent to look at the sky and be unable to attack, dealing 4 extra damage / 2 hearts. It scales as your level increases, capping at 80%.</p>
                                        <h5>Arrow Retrieval</h5>
                                        <p>This is a passive ability that allows you a chance to recover arrows that you have fired. It scales as your level increases.</p>
                                        <h5>Bonus Damage</h5>
                                        <p>Each time your level increases by 50 your damage increases by 10%. This caps as 300%.</p>
                                        <a href="http://mcmmo.wikia.com/wiki/Archery" target="_blank">Click here to find out more information</a>
                                    </div>',
                    'anchor' => 'archery'))

        </div>

        <div class="step">
            <?php $image = '/images/mcmmo/Swords.png'; ?>
            @include('partials.category', array(
                    'title' => 'Swords',
                    'description' => '<p class="box">Experience is gained by attacking mobs and players with a sword.</p>
                                    <div class="ability box">
                                        <h4>Abilities</h4>
                                        <h5>Serrated Strikes</h5>
                                        <p>To activate this skill right click while holding a sword and attack a player or mob. This will cause you to do +25% damage with a sword and apply a bleed effect for a short duration to enemies within a small radius of your target.</p>
                                        <h5>Bleed</h5>
                                        <p>Causes enemies to take damage over time. The chance for the bleed effect to occur increases as you level up.</p>
                                        <h5>Counter Attack</h5>
                                        <p>Gives a chance for 50% of the damage done to you to be done back to the attacker. The chance for counter attack to happen increases as you level up.</p>
                                        <a href="http://mcmmo.wikia.com/wiki/Swords" target="_blank">Click here to find out more information</a>
                                    </div>',
                    'anchor' => 'swords'))

        </div>

                <div class="step">
            <?php $image = '/images/mcmmo/Axes.png'; ?>
            @include('partials.category', array(
                    'title' => 'Axes',
                    'description' => '<p class="box">Experience is gained by attacking mobs and players with an axe.</p>
                                    <div class="ability box">
                                        <h4>Abilities</h4>
                                        <h5>Skull Splitter</h5>
                                        <p>To activate this skill right click while holding an axe and attack a player or mob. When activated it will deal area of effect damage in a small radius equal to half the damage you dealt with the attack.</p>
                                        <h5>Greater Impact</h5>
                                        <p>This is a passive ability that allows you a 25% chance to deal knockback to an enemy when you attack them. This will also deal additional damage to unarmoured enemies.</p>
                                        <h5>Axe Mastery</h5>
                                        <p>This is a passive ability that will increase the amount of extra damage you do when wielding an axe. Every 50 levels you do an extra 1 damage or half a heart, this caps at 4 damage or 2 hearts</p>
                                        <h5>Critical Strike</h5>
                                        <p>This is a passive ability that offers a chance for you to do critical damage. For hostile mobs the damage bonus is x2 and is x1.5 for others. The chance to happen increases as you level up.</p>
                                        <h5>Armour Impact</h5>
                                        <p>When using an axe you will do extra damage against armour wearing foes. The amount of damage scales as your level increases.</p>
                                        <a href="http://mcmmo.wikia.com/wiki/Axes" target="_blank">Click here to find out more information</a>
                                    </div>',
                    'anchor' => 'axes'))

        </div>

                        <div class="step">
            <?php $image = '/images/mcmmo/Taming.png'; ?>
            @include('partials.category', array(
                    'title' => 'Taming',
                    'description' => '<p class="box">Experience is gained by taming animals or tamed animals attacking mobs.</p>
                                    <div class="ability box">
                                        <h4>Abilities</h4>
                                        <h5>Call Of The Wild</h5>
                                        <p>Summons and animal to your side. To summon have the specified items in your hand, sneak and left click. 10 bones for a wolf, 10 fish for an ocelot and 10 apples for a horse. Summoned animals may disappear and will have less health than ones you have tamed.</p>
                                        <h5>Beast Lore</h5>
                                        <p>Gain information about a wolf, ocelot or horse by left clicking them while holding a bone.</p>
                                        <h5>Animal Bonuses</h5>
                                        <p>As your level increases your tamed animals gain and improve abilities.
    <br>- Gore: Deal critical strike and apply bleed. The chance scales as your level increases.
    <br>- Fast Food Service: 50% chance to heal on attack. lvl 50+
    <br>- Environmentally Aware: Immune to fall damage. Will tp to you when near cacti or
      lava. lvl 100+
    <br>- Thick Fur: Take half damage. lvl 250+
    <br>- Holy Hound: Healed by poison and magic. lvl 375+
    <br>- Shock Proof: Take ⅙ damage from explosions. lvl 500+
    <br>- Sharpened Claws: Deal an extra heart of damage. lvl 750+</p>
                                        <a href="http://mcmmo.wikia.com/wiki/Taming" target="_blank">Click here to find out more information</a>
                                    </div>',
                    'anchor' => 'taming'))

        </div>

                                        <div class="step">
            <?php $image = '/images/mcmmo/Repair.png'; ?>
            @include('partials.category', array(
                    'title' => 'Repair',
                    'description' => '<p class="box">Experience is gained by either repairing items or salvaging items.</p>
                                    <div class="ability box">
                                        <h4>Abilities</h4>
                                        <h5>Repairing</h5>
                                        <p>To repair tools/armor using mcMMO right click an iron block with the tool/armor you want to repair. But you must have the main component of the tool/armor to repair. I.E. To repair a iron shovel you will need 1x iron ingot in your inventory.</p>
                                        <h5>Salvaging</h5>
                                        <p>This ability allow you to get the base components back from an item you have crafted. To do this simply right click on a gold block with any tool/armor and it shall break down the item into its components. I.E. If you right click a gold block with a diamond shovel you will get one diamond back. To be able to salvage items you must have a repair level of at least 600.</p>
                                        <a href="http://mcmmo.wikia.com/wiki/Repair" target="_blank">Click here to find out more information</a>
                                    </div>',
                    'anchor' => 'repair'))

        </div>

                                <div class="step">
            <?php $image = '/images/mcmmo/Acrobatics.png'; ?>
            @include('partials.category', array(
                    'title' => 'Acrobatics',
                    'description' => '<p class="box">Experience is gained by falling off things and taking damage.</p>
                                    <div class="ability box">
                                        <h4>Abilities</h4>
                                        <h5>Roll</h5>
                                        <p>This is a passibe ability the decreases the amount of fall damage potentially to zero, when it activates. The chance of it activating increases as you level up.</p>
                                        <h5>Graceful Roll</h5>
                                        <p>By holding sneak as you are falling you double to chance of roll activating and if it activates will do even less damage on top of the roll damage reduction.</p>
                                        <h5>Dodge</h5>
                                        <p>This is a passive ability that can occur when you are attacked and will mean you only take half damage. The chance for it to happen increases with your level.</p>
                                        <a href="http://mcmmo.wikia.com/wiki/Acrobatics" target="_blank">Click here to find out more information</a>
                                    </div>',
                    'anchor' => 'acrobatics'))

        </div>

                                        <div class="step">
            <?php $image = '/images/mcmmo/Alchemy.png'; ?>
            @include('partials.category', array(
                    'title' => 'Alchemy',
                    'description' => '<p class="box">Experience is gained by brewing potions</p>
                                    <div class="ability box">
                                        <h4>Abilities</h4>
                                        <h5>Catalysis</h5>
                                        <p>This is a passive ability that makes the time that it takes to brew potions shorter</p>
                                        <h5>Concoctions</h5>
                                        <p>This allows player to unlock the ability to brew unbrewable potions. A detailed list can be found on the wiki.</p>
                                        <a href="http://mcmmo.wikia.com/wiki/Alchemy" target="_blank">Click here to find out more information</a>
                                    </div>',
                    'anchor' => 'alchemy'))

        </div>
@stop
