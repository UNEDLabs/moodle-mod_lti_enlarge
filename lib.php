<?php
// This file is part of the Moodle sub-plugin "LTI Sarlab"
//
// LTI Sarlab is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// LTI Sarlab is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle. If not, see <http://www.gnu.org/licenses/>.
//
// LTI Sarlab has been developed by:
// - Luis de la Torre: ldelatorre@dia.uned.es
//
// at the Computer Science and Automatic Control, Spanish Open University
// (UNED), Madrid, Spain.

/**
 * Lib file for the LTI Sarlab sub-plugin
 *
 * @package    mod_lti_sarlab
 * @copyright  2015 Luis de la Torre
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

function ltisource_sarlab_get_shortcuts($defaultitem) {
    $type = new stdClass();
    $type->title = get_string('addsarlab', 'ltisource_sarlab');
    $type->name = get_string('modsarlabname', 'ltisource_sarlab');
    $type->link = $defaultitem->link;
    $type->icon = $defaultitem->icon;
    $type->help = get_string('addsarlab_help', 'ltisource_sarlab');
    $type->archetype = $defaultitem->archetype;

    return array($type);
}

function ltisource_sarlab_add_instance_hook() {
    // Do custom work here.
}

function ltisource_sarlab_before_launch() {
    global $USER;

    $context = context_system::instance();

    if (has_capability('ltisource/sarlab:createexp', $context, $USER)) {
        $role = 'Designer';
    } else if (has_capability('ltisource/sarlab:editexp', $context, $USER)) {
        $role = 'Manager';
    } else {
        $role = 'Unauthorized';
    }

    $params = array('roles' => $role);

    return $params;
}