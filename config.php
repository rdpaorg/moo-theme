<?php
defined('MOODLE_INTERNAL') || die();

$THEME->name = 'rdpa';
$THEME->sheets = [];
$THEME->editor_sheets = [];
$THEME->parents = ['boost'];
$THEME->enable_dock = false;
$THEME->yuicssmodules = [];
$THEME->rendererfactory = 'theme_overridden_renderer_factory';

$THEME->scss = function($theme) {
    return theme_rdpa_get_main_scss_content($theme);
};

$THEME->javascript = function() {
    return theme_rdpa_get_javascript_content();
};

function theme_rdpa_get_main_scss_filepath() {
    return __DIR__ . '/styles/rdpa.css';
 }
 