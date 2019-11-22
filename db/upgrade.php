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
 * LTI ENLARGE sub-plugin upgrade file
 *
 * @package    mod_lti_enlarge
 * @copyright  2015 Luis de la Torre
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Upgrade function for the remlab manager block
 *
 * @param string $oldversion
 * @return true
 * @throws coding_exception
 * @throws dml_exception
 */
function xmldb_ltisource_enlarge_upgrade($oldversion) {
    global $DB;

    // Get system context.
    $context = context_system::instance();

    // Assign capabilities to the myFrontier experiences designer role.
    if (!$DB->record_exists('role', array('shortname' => 'enlargedesigner'))) {
        if ($enlargedesignerid = $DB->get_field('role','id',array('shortname' => 'enlargedesigner'))) {
            // Assign capabilities.
            if (get_capability_info("ltisource/enlarge:addinstance")) {
                assign_capability('ltisource/enlarge:addinstance', CAP_ALLOW, $enlargedesignerid, $context->id, true);
            }
            if (get_capability_info("ltisource/enlarge:view")) {
                assign_capability('ltisource/enlarge:view', CAP_ALLOW, $enlargedesignerid, $context->id, true);
            }
            if (get_capability_info("ltisource/enlarge:useexp")) {
                assign_capability('ltisource/enlarge:useexp', CAP_ALLOW, $enlargedesignerid, $context->id, true);
            }
            if (get_capability_info("ltisource/enlarge:editexp")) {
                assign_capability('ltisource/enlarge:editexp', CAP_ALLOW, $enlargedesignerid, $context->id, true);
            }
            if (get_capability_info("ltisource/enlarge:createexp")) {
                assign_capability('ltisource/enlarge:createexp', CAP_ALLOW, $enlargedesignerid, $context->id, true);
            }
        }
    }

    // Assign capabilities to the myFrontier experiences manager role.
    if (!$DB->record_exists('role', array('shortname' => 'enlargemanager'))) {
        if ($enlargemanagerid = $DB->get_field('role','id',array('shortname' => 'enlargemanager'))) {
            // Assign capabilities.
            if (get_capability_info("ltisource/enlarge:view")) {
                assign_capability('ltisource/enlarge:view', CAP_ALLOW, $enlargemanagerid, $context->id, true);
            }
            if (get_capability_info("ltisource/enlarge:useexp")) {
                assign_capability('ltisource/enlarge:useexp', CAP_ALLOW, $enlargemanagerid, $context->id, true);
            }
            if (get_capability_info("ltisource/enlarge:editexp")) {
                assign_capability('ltisource/enlarge:editexp', CAP_ALLOW, $enlargemanagerid, $context->id, true);
            }
        }
    }

    return true;
}