<?php

// We defined the web service functions to install.
$functions = [
    'block_mood_checker_get_mood_results' => [     
    'classname'   => 'block_mood_checker\external\api',  
    'methodname'  => 'get_mood_results',         
    'classpath'   => '',  
    'description' => 'Graphic representation of the current mood trends.',
    'type'        => 'read',
    'loginrequired' =>true,
    'ajax' => true,     
    ],
];

