<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Sarlab LTI plugin privacy api.
 *
 * @package    mod_lti_sarlab
 * @copyright  2018 Luis de la Torre
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace mod_lti_sarlab\privacy;
use core_privacy\local\metadata\collection;

/**
 * Class to indicate what data stores the plugin, how to export it and how to delete it.
 *
 * @package    mod_lti_sarlab
 * @copyright  2018 Luis de la Torre
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class provider implements \core_privacy\local\metadata\provider {
    public static function get_metadata(collection $collection) : collection {
        $collection->add_external_location_link('lti_client', [
            'userid' => 'privacy:metadata:lti_client:userid',
            'fullname' => 'privacy:metadata:lti_client:fullname',
            'role' => 'privacy:metadata:lti_client:role',
        ], 'privacy:metadata:lti_client');

        return $collection;
    }
}