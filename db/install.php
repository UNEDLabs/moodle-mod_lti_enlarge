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
 * LTI Sarlab sub-plugin installation
 *
 * @package    mod_lti_sarlab
 * @copyright  2015 Luis de la Torre
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

function xmldb_ltisource_sarlab_install() {
    global $DB;

    // Get system context.
    $context = context_system::instance();

    // Create the sarlab experiences designer role.
    if (!$DB->record_exists('role', array('shortname' => 'sarlabdesigner'))) {
        $sarlabdesignerid = create_role(get_string('sarlabdesigner', 'ltisource_sarlab'),
            'sarlabdesigner', get_string('sarlabdesigner_desc', 'ltisource_sarlab'));
        set_role_contextlevels($sarlabdesignerid, array(CONTEXT_SYSTEM));
        // Assign capabilities.
        assign_capability('ltisource/sarlab:addinstance', CAP_ALLOW, $sarlabdesignerid, $context->id, true);
        assign_capability('ltisource/sarlab:view', CAP_ALLOW, $sarlabdesignerid, $context->id, true);
        assign_capability('ltisource/sarlab:useexp', CAP_ALLOW, $sarlabdesignerid, $context->id, true);
        assign_capability('ltisource/sarlab:editexp', CAP_ALLOW, $sarlabdesignerid, $context->id, true);
        assign_capability('ltisource/sarlab:createexp', CAP_ALLOW, $sarlabdesignerid, $context->id, true);
        // Assign capabilities for the Remlab Manager block if installed.
        if ($DB->record_exists('block', array('name' => 'remlab_manager'))) {
            assign_capability('block/remlab_manager:myaddinstance', CAP_ALLOW, $sarlabdesignerid, $context->id, true);
            assign_capability('block/remlab_manager:addinstance', CAP_ALLOW, $sarlabdesignerid, $context->id, true);
            assign_capability('block/remlab_manager:view', CAP_ALLOW, $sarlabdesignerid, $context->id, true);
        }
    }

    // Create the sarlab experiences manager role.
    if (!$DB->record_exists('role', array('shortname' => 'sarlabmanager'))) {
        $sarlabmanagerid = create_role(get_string('sarlabmanager', 'ltisource_sarlab'),
            'sarlabmanager', get_string('sarlabmanager_desc', 'ltisource_sarlab'));
        set_role_contextlevels($sarlabmanagerid, array(CONTEXT_SYSTEM));
        // Assign capabilities.
        assign_capability('ltisource/sarlab:view', CAP_ALLOW, $sarlabmanagerid, $context->id, true);
        assign_capability('ltisource/sarlab:useexp', CAP_ALLOW, $sarlabmanagerid, $context->id, true);
        assign_capability('ltisource/sarlab:editexp', CAP_ALLOW, $sarlabmanagerid, $context->id, true);
        // Assign capabilities for the Remlab Manager block if installed.
        if ($DB->record_exists('block', array('name' => 'remlab_manager'))) {
            assign_capability('block/remlab_manager:myaddinstance', CAP_ALLOW, $sarlabmanagerid, $context->id, true);
            assign_capability('block/remlab_manager:addinstance', CAP_ALLOW, $sarlabmanagerid, $context->id, true);
            assign_capability('block/remlab_manager:view', CAP_ALLOW, $sarlabmanagerid, $context->id, true);
        }
    }

    // Clear any capability caches
    $context->mark_dirty();
}