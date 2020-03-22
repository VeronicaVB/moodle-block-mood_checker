<?php

namespace block_mood_checker\external;

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir.'/externallib.php');

use external_api;


class api extends external_api {
    use get_mood_results;
}
