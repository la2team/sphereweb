<?php

/**
 *
 * This is a currency course
 * Ratio 1 donate bonus to different currency.
 *
 * If a person threw 300 rubles, he will receive 3.95
 *
 * If you do not understand the subtleties of the settings, it is better to leave everything as it is.
 *
 */

const __config__donate = [

    //Which payment system will be selected by default
    'pay_system_default' => 'freekassa',


    /**
     * The minimum number of bonuses that the user can buy.
     */
    'min_donate_bonus_coin' => 100,

    //The maximum amount of dB that the user can buy at a time
    'max_donate_bonus_coin' => 5000,

    //The number of bonuses that the user will receive for the amount equal to 1 dollar will receive
    //for example, if Quantity = 10, then for a donat of $ 1, the user will receive 10 donat bonus
    //If you find100, then he will be used by 10Donatbonusovusadonatvsummekotnye equal1 $
    'quantity' => 100,

    //If you do not understand these currencies, then it is better not to change, leave it as it is.
    'coefficient' => [
        //If the user throws 1 $ = receives 1 donat of bonuses (if quantity = 1)
        'USD' => 1,
        //If the user is thrown 42 euros = receives 26.25 dB
        'EUR' => 1.05,
        //If the user is thrown 377 UAH = receives 10.21 dB
        'UAH' => 38.5,
        //If a person threw 300 rubles, he will receive 3.95
        'RUB' => 100,
    ],


    /**
     * Various discounts
     */

    /**
    * The accumulative system of discounts
    *
    * Works in this way
    * We consider a discount on how much the user bought the Donat Coina for the entire time of his profile.
    * For example, a man donated and donated, and as a result, he had 23419 Donat Bonus,
    * This will give him at the next donation of a bonus of 25% of the bonuses additionally.
     */

    //Turn on the accumulative system of discounts?
    'DONATE_DISCOUNT_TYPE_STORAGE' => false,
    'discount' => [
        'table' => [
            //from 500 dB gives 3% bonus
            500 => 3,
            1000 => 5,
            1500 => 8,
            2000 => 10,
            3000 => 13,
            5000 => 15,
            9000 => 18,
            13000 => 20,
            //from 15,000 dB gives 15% bonus
            15000 => 22,
            20000 => 25,
            25000 => 27,
            //Any amount above 30,000 gives 30% bonus
            30000 => 30,
        ],
    ],


    /**
    * One -time bonus when replenishing.
    * Works like this: the user is donated and bought 50 Donat Koinov (Koin sphere),
    * Then he is also given an additional N% of donat from the bought donat Koinov.
    * Example: the user bought 2789 donk that according to the table - 10%, so the user
    * receives a bonus 250 Donat Koinov.
    */
    // Turn on/off a one -time replenish bonus
    'ONE_TIME_REPLENISHMENT_BONUS_ENABLE' => false,
    'one_time_discount' => [
        'table' => [
            //Sum => percentage of one -time bonus
            500 => 3,
            1000 => 5,
            1500 => 8,
            2000 => 10,
            3000 => 13,
            5000 => 15,
            9000 => 18,
            13000 => 20,
            15000 => 22,
            20000 => 25,
            25000 => 27,
            //Any amount above 30,000 gives 30% bonus
            30000 => 30,
        ],
    ],


    /**
    * System of discounts on the purchase of goods (item) in the store
    */
    //Turn on the system of discounts on goods?
    'DONATE_DISCOUNT_TYPE_PRODUCT_ENABLE' => false,

    // Discount table
    // And we give him a discount on the purchase based on the total amount of the bonuses.
    // If the user has a bore more than 1500 or less than 2000 - then the discount will be 8%
    'discount_product' => [
        'table' => [
            500 => 1,
            1000 => 2,
            1500 => 3,
            2000 => 5,
            3000 => 6,
            5000 => 7,
            9000 => 9,
            13000 => 11,
            15000 => 13,
            20000 => 14,
            25000 => 15,
            30000 => 18,
        ],
    ],


    /**
     * One -time discounts
     *
     * If the user buys more N number of pcs. Then he receives a discount on the purchase.
     */
    //Turn on one -time discounts?
    'DONATE_DISCOUNT_COUNT_ENABLE' => false,
    'discount_count_product' => [
        //If you buy 5 pieces and more, then the 3% discount
        'table' => [
            5 => 3,
            8 => 7,
            10 => 9,
            15 => 12,
            20 => 14,
            25 => 15,
        ],
        // List of ID items that the user can buy at a discount, if empty, then for all objects
        // For example 57, 728 (then the discount is allowed only for these items)
        'items' => [
        ],
    ],

    //ON/Off of Bonuses for Donat
    'DONATE_BONUS_ITEM_ENABLE' => false,
    'donate_bonus_list' => [

        [
            //If the user has a one -time one over 500 spherecoin
            'sc' => 500, // The number of Spherecoin, which was credited
            'items' => [
                [
                    'id' => 57,  // Issued item ID
                    'count' => 1000, // Quantity
                    'enchant' => 0, // Sharpening level
                ],
                [
                    'id' => 17,
                    'count' => 150,
                    'enchant' => 0,
                ],
            ],
        ],

        [
            'sc' => 1000,
            'items' => [
                [
                    'id' => 57,
                    'count' => 2500,
                    'enchant' => 0,
                ],
                [
                    'id' => 17,
                    'count' => 400,
                    'enchant' => 0,
                ],
            ],
        ],

        [
            'sc' => 3000,
            'items' => [
                [
                    'id' => 57,
                    'count' => 5000,
                    'enchant' => 0,
                ],
                [
                    'id' => 17,
                    'count' => 800,
                    'enchant' => 0,
                ],
            ],
        ],

    ],

];

