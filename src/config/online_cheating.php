<?php
/**
 * Config of online wrappers
 */

//Turn on/off online wrapping
const ONLINE_CHEATING_ENABLE = false;

//How much to display (random) minimum and maximum number of online (in case online 0)
//If you want to be online always 0 If online is really 0, then install Min and Max 0
const ONLINE_CHEATING_MIN_MAX_ONLINE = [
    'min' => 15,
    'max' => 25,
];

/*
* Street wrapping online allows you to softer and believablely configure the output online
 * If online 0, then online will be taken from the table below
*
 * Number of online => [Time => Online wrapping coefficient]
 *
 * For example: online 37 people, time now 10:57
 *
 * Note: 37 people are between 30 and 60, and time 10:57 is between 10:00 and 12:00
 * This corresponds to the coefficient of online wrapping 3.15
 * 37* 3.15 = 116.55 online, the result will be rounded to a larger number, thus we get 117 online.
 */
const cheat_online = [
    1 => [
        '00:00' => 3.5,
        '04:00' => 3.3,
        '08:00' => 3.2,
        '10:00' => 3.4,
        '12:00' => 3.5,
        '16:00' => 3.4,
        '20:00' => 3.6,
        '22:00' => 3.5,
    ],
    10 => [
        '00:00' => 3.58,
        '04:00' => 3.35,
        '08:00' => 3.25,
        '10:00' => 3.50,
        '12:00' => 3.53,
        '16:00' => 3.48,
        '20:00' => 3.55,
        '22:00' => 3.62,
    ],
    30 => [
        '00:00' => 3.28,
        '04:00' => 3.20,
        '08:00' => 3.07,
        '10:00' => 3.15,
        '12:00' => 3.19,
        '16:00' => 3.24,
        '20:00' => 3.29,
        '22:00' => 3.27,
    ],
    60 => [
        '00:00' => 2.58,
        '04:00' => 2.55,
        '08:00' => 2.52,
        '10:00' => 2.53,
        '12:00' => 2.58,
        '16:00' => 2.55,
        '20:00' => 2.64,
        '22:00' => 2.65,
    ],
    100 => [
        '00:00' => 2.18,
        '04:00' => 2.17,
        '08:00' => 2.16,
        '10:00' => 2.15,
        '12:00' => 2.16,
        '16:00' => 2.17,
        '20:00' => 2.19,
        '22:00' => 2.22,
    ],
    150 => [
        '00:00' => 2.15,
        '04:00' => 2.14,
        '08:00' => 2.13,
        '10:00' => 2.12,
        '12:00' => 2.13,
        '16:00' => 2.12,
        '20:00' => 2.17,
        '22:00' => 2.19,
    ],
    300 => [
        '00:00' => 1.92,
        '04:00' => 1.91,
        '08:00' => 1.89,
        '10:00' => 1.88,
        '12:00' => 1.90,
        '16:00' => 1.88,
        '20:00' => 1.93,
        '22:00' => 1.94,
    ],
    450 => [
        '00:00' => 1.85,
        '04:00' => 1.83,
        '08:00' => 1.82,
        '10:00' => 1.79,
        '12:00' => 1.77,
        '16:00' => 1.78,
        '20:00' => 1.83,
        '22:00' => 1.87,
    ],

];
