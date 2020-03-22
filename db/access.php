<?php
$capabilities = array(
 
    'block/mood_checker:myaddinstance' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_SYSTEM,
        'archetypes' => array(
            'guest' => CAP_PROHIBIT,
            'student' => CAP_PROHIBIT,    
            'teacher' => CAP_PROHIBIT,
            'editingteacher' => CAP_PROHIBIT,
            'coursecreator' => CAP_PROHIBIT,
            'manager' => CAP_PROHIBIT,
        ),
    ),
 
    'block/mood_checker:addinstance' => array(
        'riskbitmask' => RISK_SPAM | RISK_XSS,
 
        'captype' => 'write',
        'contextlevel' => CONTEXT_BLOCK,
        'archetypes' => array(
            'guest' => CAP_PROHIBIT,
            'student' => CAP_PROHIBIT,    
            'teacher' => CAP_PROHIBIT,
            'editingteacher' => CAP_PROHIBIT,
            'coursecreator' => CAP_PROHIBIT,
            'manager' => CAP_PROHIBIT,
        ),
    ),
    
    'block/mood_checker:edit' => array(
        'riskbitmask' => RISK_SPAM | RISK_XSS,
 
        'captype' => 'write',
        'contextlevel' => CONTEXT_BLOCK,
        'archetypes' => array(
            'guest' => CAP_PROHIBIT,
            'student' => CAP_PROHIBIT,    
            'teacher' => CAP_PROHIBIT,
            'editingteacher' => CAP_PROHIBIT,
            'coursecreator' => CAP_PROHIBIT,
            'manager' => CAP_PROHIBIT,
        ),
    ),
);

