<?php

require_once(dirname(__FILE__) . '/../../../../config.php');
require_once($CFG->dirroot.'/local/learningtools/learningtools.php');

class note extends learningtools {

    public function get_tool_name() {
        return get_string('note', 'local_learningtools');
    }

    public function get_tool_icon() {

        return 'fa fa-sticky-note';
    }

}