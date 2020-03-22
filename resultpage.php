<?php
require_once('../../config.php');

$PAGE->set_context( context_system::instance());
$PAGE->set_pagelayout('admin');
$PAGE->set_title("Your title");
$PAGE->set_heading("CGS Mood");
$PAGE->set_url($CFG->wwwroot.'/resultpage.php');

$chart = new  \core\chart_pie();
$serie1 = new core\chart_series('CGS Mood', [20, 20, 60]);
$chart->add_series($serie1); // On pie charts we just need to set one series.
$chart->set_labels(['Bad', 'OK', 'Good']);

echo $OUTPUT->header();
echo $OUTPUT->render($chart);
echo $OUTPUT->footer();

