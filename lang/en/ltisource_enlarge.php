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
 * English language file for the LTI ENLARGE sub-plugin
 *
 * @package    mod_lti_enlarge
 * @copyright  2015 Luis de la Torre
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$string['pluginname'] = 'LTI ENLARGE';
$string['addenlarge'] = 'ENLARGE';
$string['addenlarge_help'] = 'ENLARGE is a system that facilitates the management of remote laboratories. This activity enables LTI access to its software';
$string['modenlargename'] = 'lti:ENLARGE';

// Strings for capabilities.
$string['enlarge:addinstance'] = 'Add new ENLARGE LTI activities';
$string['enlarge:view'] = 'View ENLARGE LTI activities';
$string['enlarge:useexp'] = 'Assign existing ENLARGE experiences to EJSApp activities';
$string['enlarge:editexp'] = 'Edit existing ENLARGE experiences';
$string['enlarge:createexp'] = 'Create and delete ENLARGE experiences';

// Strings for new roles.
$string['enlargedesigner'] = 'ENLARGE designer';
$string['enlargedesigner_desc'] = 'ENLARGE designers can create, delete, edit and use ENLARGE experiences, as well as assign manager users';
$string['enlargemanager'] = 'ENLARGE manager';
$string['enlargemanager_desc'] = 'ENLARGE managers can edit and use existing ENLARGE experiences';

// Privacy
$string['privacy:metadata:lti_client'] = 'In order to integrate with ENLARGE\'s LTI service, user data needs to be exchanged with that service.';
$string['privacy:metadata:lti_client:userid'] = 'The userid is sent from Moodle to allow you to access your data on myFrontier.';
$string['privacy:metadata:lti_client:fullname'] = 'Your full name is sent to myFrontier to allow a better user experience.';
$string['privacy:metadata:lti_client:role'] = 'Your course role is sent to myFrontier to enable/disable possibilities according to your permissions.';