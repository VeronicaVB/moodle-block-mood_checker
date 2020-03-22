<?php

class block_mood_checker extends block_base {
    public function init() {
        $this->title = get_string('mood_checker', 'block_mood_checker');
    }
    
    public function get_content() {
        global $OUTPUT;
        if ($this->content !== null) {
          return $this->content;
        }

        $this->content         =  new stdClass;
        $data = array();
        $data = ['admin'=> is_siteadmin()];
        
        $this->content->text = $OUTPUT->render_from_template('block_mood_checker/moods', $data);
        if(is_siteadmin()){
            $url = new moodle_url('/blocks/mood_checker/resultpage.php', array('blockid' => $this->instance->id));
            $this->content->footer = html_writer::link($url, get_string('showresult', 'block_mood_checker'));            
        }
        return $this->content;
    }
    
    function hide_header() {
        return true;
    }
    
    public function get_required_javascript() {
        parent::get_required_javascript();
        $this->page->requires->js_call_amd('block_mood_checker/controls','init');
    }
}

