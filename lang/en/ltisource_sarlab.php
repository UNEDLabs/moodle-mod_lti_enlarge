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
 * English language file for the LTI Sarlab sub-plugin
 *
 * @package    mod_lti_sarlab
 * @copyright  2015 Luis de la Torre
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$string['pluginname'] = 'LTI Sarlab';
$string['addsarlab'] = 'Sarlab';
$string['addsarlab_help'] = 'Sarlab is a system that facilitates the management of remote laboratories. This activity enables LTI access to its software';
$string['modsarlabname'] = 'lti:Sarlab';

// Strings for capabilities.
$string['sarlab:addinstance'] = 'Add new Sarlab LTI activities';
$string['sarlab:view'] = 'View Sarlab LTI activities';
$string['sarlab:useexp'] = 'Assign existing Sarlab experiences to EJSApp activities';
$string['sarlab:editexp'] = 'Edit existing Sarlab experiences';
$string['sarlab:createexp'] = 'Create and delete Sarlab experiences';

// Strings for new roles.
$string['sarlabdesigner'] = 'Sarlab designer';
$string['sarlabdesigner_desc'] = 'Sarlab designers can create, delete, edit and use Sarlab experiences, as well as assign manager users';
$string['sarlabmanager'] = 'Sarlab manager';
$string['sarlabmanager_desc'] = 'Sarlab managers can edit and use existing Sarlab experiences';

// Privacy
$string['privacy:metadata:lti_client'] = 'In order to integrate with Sarlab\'s LTI service, user data needs to be exchanged with that service.';
$string['privacy:metadata:lti_client:userid'] = 'The userid is sent from Moodle to allow you to access your data on Sarlab.';
$string['privacy:metadata:lti_client:fullname'] = 'Your full name is sent to Sarlab to allow a better user experience.';
$string['privacy:metadata:lti_client:role'] = 'Your course role is sent to Sarlab to enable/disable possibilities according to your permissions.';