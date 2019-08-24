<?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Config value default for all tables
    |--------------------------------------------------------------------------
    |
    | 
    |
    */

    'devices' => [

        'status' => [
            'good' => 'good',
            'bad' => 'bad',
            'trash' => 'trash'
        ],        

    ], 

    'calendars' => [

        'status' => [
            'approved' => 'approved',
            'pending' => 'pending',
            'trash' => 'trash',
        ],        

    ],   

    'taks' => [

        'status' => [
            'finished' => 'finished',
            'pending' => 'pending',
            'trash' => 'trash',
        ],        

    ],

];
