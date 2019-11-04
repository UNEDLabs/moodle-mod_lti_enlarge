<?php
// This file is part of the Moodle sub-plugin "LTI ENLARGE"
//
// LTI ENLARGE is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// LTI ENLARGE is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle. If not, see <http://www.gnu.org/licenses/>.
//
// LTI ENLARGE has been developed by:
// - Luis de la Torre: ldelatorre@dia.uned.es
//
// at the Computer Science and Automatic Control, Spanish Open University
// (UNED), Madrid, Spain.

/**
 * Lib file for the LTI ENLARGE sub-plugin
 *
 * @package    mod_lti_enlarge
 * @copyright  2015 Luis de la Torre
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

function ltisource_enlarge_get_shortcuts($defaultitem) {
    global $OUTPUT;
    $type = new stdClass();
    $type->title = get_string('addenlarge', 'ltisource_enlarge');
    $type->name = get_string('modenlargename', 'ltisource_enlarge');
    $type->link = new moodle_url($defaultitem->link, ['type' => 'enlarge']);
    $type->icon = $defaultitem->icon;
    $type->help = get_string('addenlarge_help', 'ltisource_enlarge');
    $type->archetype = $defaultitem->archetype;
    $type->icon = $OUTPUT->image_icon('icon', '', 'ltisource_enlarge', array('class' => 'icon'));

    return array($type);
}

function ltisource_enlarge_add_instance_hook() {
    // Do custom work here.
}

function ltisource_enlarge_before_launch() {
    global $USER;

    $context = context_system::instance();

    if (has_capability('ltisource/enlarge:createexp', $context, $USER, false)) {
        $role = 'Designer';
    } else if (has_capability('ltisource/enlarge:editexp', $context, $USER, false)) {
        $role = 'Manager';
    } else {
        $role = 'Unauthorized';
    }

    $params = array('roles' => $role, 'oauth_consumer_key' => get_config('mod_ejsapp', 'server_id'));

    return $params;
}