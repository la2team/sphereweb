<?php

// The time zone by default, if not installed by the user or is not determined when registering
const DEFAULT_TIMEZONE = "Europe/Moscow";

//CostOfTheKoinovSphere,ToChangeTheAvatar
const PRICE_CHANGE_AVATAR = 5;

// there are two templates, Light (light) and dark (dark), by default Light, it will be loaded for users who
// not authorized and did not choose the preferred color of the template in the settings
const MODE_TEMPLATE = "dark";

// by default TICHEL COMMENTED OF ORE (TRUE) or closed (FALSE)
const IS_DEFAULT_PUBLIC_TICKET = true;

// True / false - enable / disable templates caching
// on working projects - include
const ENABLE_CACHE_TEMPLATE = false;

// Debag of templates
// on working projects - turn off
const DEBUG_TEMPLATE = true;

// Auto -transload of templates
const AUTO_RELOAD = true;

// hide player passwords
// is necessary in case you have a client with autologue and you use the launcher
const SAVE_ACCOUNT_PASSWORD = false;

// site for maintenance.
// We turn off the site and display the message that the site is on technical service
// Users will not be able to visit the pages and view the site, with the exception of the administrator.
const TECHNICAL_WORK = false;
// notification of the time when the maintenance is completed
// you can specify a message or false if you do not need to display a message about the warning of the work
const TECHNICAL_WORK_TIME_UP = "21:00 - 22.07.2025";

// project logo, this is an inscription or a small image that is displayed at the very top of the page on the left.
const LOGO_PROJECT = "<i class='fa fa-fire text-primary'></i><span class='fs-4 text-dual'>Sphere</span><span class='fs-4 text-primary'>Web</span>" ;

// title of title page (first /)
const TITLE = [
    "en" => "Welcome to the World of Essence.",
];

// Description of the main page
const DESCRIPTION = [
    "en" => "New Era of Interlude!",
];

const KEYWORDS = "L2 сервер, Игровой сервер L2, PvP сервер, Новый сервер, High Five сервер, Бесплатный сервер L2, L2 скачать, CMS SphereWeb, MMORPG, L22Clan, Get-Web.Site,
L22Community, Aden, Giran, L22 Server, L2j, Aden Castle, Dion Castle, Giran Castle, Gludio Castle, Goddard Castle, Innadril Castle, Oren Castle, Rune Castle, Schuttgart Castle, Talking Island Castle,
Human Fighter, Human Knight, Rogue, Warrior, Human Mystic, Human Wizard, Cleric, Elf Fighter, Elven Knight, Scout, Elf Mystic, Elven Wizard, Elven Oracle, Dark Elf Fighter, Palus Knight, Assassin, Dark Elf Mystic, Dark Wizard, Shillien Oracle, Orc Fighter, Orc Raider, Monk, Orc Mystic, Orc Shaman, Overlord, Dwarf Fighter, Scavenger, Artisan, Dwarf Mystic, Warsmith, Bounty Hunter, Kamael Soldier, Trooper, Berserker, Kamael Mystic, Soul Breaker, Soul Breaker,
Открытый мир фэнтезийной вселенной, разнообразие игровых рас: люди, эльфы, тёмные эльфы, орки, дворфы, камаэлы, многообразие профессий и классов персонажей, PvP (игрок против игрока) и PvE (игрок против окружающей среды) контент, захватываемые замки и территории, квесты и задания для развития персонажа, разнообразие монстров и боссов, эпические сражения и рейды, экономическая составляющая игры: торговля, создание предметов, игровая валюта, социальное взаимодействие: кланы, альянсы, гильдии, разнообразие игровых зон и локаций, развитие персонажа через навыки и экипировку,
Open-world fantasy universe, diverse playable races including Humans, Elves, Dark Elves, Orcs, Dwarves, and Kamael, variety of character professions and classes, PvP and PvE content, capturable castles and territories, quests and tasks for character development, diverse range of monsters and bosses, epic battles and raids, in-game economy involving trading, crafting, and currency, social interaction through clans, alliances, guilds, diverse gaming zones and locations, character progression through skills and equipment,
Игровые события L2, L2 фестивали, Праздничные события L2, L2 система торговли, Крафт в L2, PvP/PvE системы L2, L2 форумы, L2 сообщество, L2 обсуждения, L2 обновления, High Five обновление L2, L2 последний патч, L2 server, gaming server L2, PVP server, new server, High Five server, free server L2, L2 download, CMS sphereweb, mmorpg, l22clan, get-web.site,
L22Community, Aden, Giran, L22 Server, L2J, Aden Castle, Dion Castle, Giran Castle, Gludio Castle, Goddard Castle, Innadril Castle, Oren Castle, Rune Castle, Schuttgart Castle, Talkin G Island Castle,
Human Fighter, Human Knight, Rogue, Warrior, Human Mystic, Human Wizard, Cleric, Elf Fighter, Elven Knight, Scout, Elf Mystic, Elven Wizard, Elven Oracle, Dark Elf Fighter, Dark Elven Fighter Palus Knight, Assassin, Dark Elf Mystic, Dark WizardSHILLEN Oracle, Orc Fighter, Orc Raider, Monk, Orc Mystic, Orc Shaman, Overlord, Dwarf Fighter, Scavenger, Artisan, Dwarf Mystic, Warsmith, Bounty Hunter, Kamel Soldier, Troop ER, Berserker, Kamael Mystic, Soul Breaker, Soul Breaker,
The open world of the fantasy universe, the variety of game races: people, elves, dark elves, orcs, yard, kamael, the variety of professions and classes of characters, PVP (player against the player) and PVE (player against the environment) content, captured locks and territories, questsand tasks for the development of the character, the variety of monsters and bosses, the epic battles and raids, the economic component of the game: trade, the creation of objects, the game currency, social interaction: clans, alliances, guilds, the variety of game zones and locations, the development of the character through skills and equipment,
Open-World Fantasy Universe, Diverse Playable Races Including Humans, Elves, Dark Elves, Orcs, Dwars, and Kamael, Variety of Character Professions and Classes, PVP And PVE Content, PVP And PVE Capturable Castles and Territories, Quets and Tasks for Character Development, Diverse RangeOf Monsters and Bosses, Epic Battles and Raids, In-Game Economy Involing Trading, Crafting, and Currency, Social Intection Throhh Clans, Guilds, Diverse Gaming Zones D Locations, Character Progression Through Skills and Equipment,
Game events L2, L2 festivals, festive events L2, L2 System of Trade, Kraft in L2, PVP/PVE system L2, L2 Forums, L2 Community, L2 discussions, L2 updates, HIGH FIVE Update L2, L2 LAST PATCH.";


// Do you maintain data on online statistics
const SAVE_ONLINE_STATISTIC = true;
// The minimum time in the minutes when the next request for maintaining online statistics will be sent
const PAUSE_TIME = 10;
// Increase the indicators of the online output (for users, in the admin admin, honest).
const ONLINE_MUL = 1.72;

// Require mandatory authorization to view the LC?
const REQUIRE_AUTHORIZATION = true;