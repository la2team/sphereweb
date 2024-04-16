<?php

/**
 * Demand the authorization confirmation code from the admin?
 * This code will be required after entering the administrator account
 */
const IS_ADMIN_CONFIRMATION_CODE = false;

/**
 * Access codes that will be needed to skip the administrator
 * The administrator will need to enter any code from the array
 */
const ADMIN_CODES_AUTH = [
    '123$567',
    'thisMyAdminPass#word',
];