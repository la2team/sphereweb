<?php
/**
* System protection system from theft
 * When registering, the user can choose a prefix or suffix to the account
 * We do not oblige the user to use this protection, only at his request.
 */

const __config__prefix = [
// Turn on the system of prefixes-Suffixes
    // True - Turn on /FALSE - turn off
    'enable' => true,
// Prefix adds symbols sj_login to the beginning
    // sufix adds to the end of the word symbols Login_sj
    'type' => 'prefix',
];
