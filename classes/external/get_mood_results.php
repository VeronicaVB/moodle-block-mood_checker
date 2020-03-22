<?php

namespace block_mood_checker\external;

defined('MOODLE_INTERNAL') || die();

use external_function_parameters;
use core;



require_once($CFG->libdir . "/externallib.php");

trait get_mood_results  {

    /**
     * Returns description of method parameters
     * @return external_function_parameters
     */
    public static function get_mood_results_parameters() {
        return new external_function_parameters(
                array( 
                    'graphictype' => new \external_value(PARAM_RAW, 'Type of graphic to show.'),
                    )
        );
    }

    public static function get_mood_results($graphictype) {
        global $USER,$OUTPUT;
        
           
        $context = get_context_instance(CONTEXT_USER, $USER->id);
        self::validate_context($context);
        self::validate_parameters(self::get_mood_results_parameters(),array('graphictype' => $graphictype));

        $chart = new  \core\chart_pie();
        $serie1 = new core\chart_series('CGS Mood', [20, 20, 60]);
        $chart->add_series($serie1); // On pie charts we just need to set one series.
        $chart->set_labels(['Bad', 'OK', 'Good']);
        
        return array (
            'graphic'=> $OUTPUT->render($chart)
          );
   
    }
    
    /**
     * Returns description of method result value
     * @return external_description
     */
    public static function get_mood_results_returns() {
        return new \external_single_structure(
                array(
                    'graphic' => new \external_value(PARAM_RAW,'The welcome message + user first name'),
                )
        );
        
    }


}
