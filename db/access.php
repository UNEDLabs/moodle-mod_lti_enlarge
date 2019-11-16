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
 * LTI ENLARGE sub-plugin caps
 *
 * @package    mod_lti_enlarge
 * @copyright  2015 Luis de la Torre
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$capabilities = array(

    'ltisource/enlarge:addinstance' => array(
        'riskbitmask' => RISK_XSS,
        'captype' => 'write',
        'contextlevel' => CONTEXT_COURSE,
        'archetypes' => array(
            'enlargedesigner' => CAP_ALLOW,
        ),
    ),

    'ltisource/enlarge:view' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_SYSTEM,
        'archetypes' => array(
            'enlargedesigner' => CAP_ALLOW,
            'enlargemanager' => CAP_ALLOW
        ),
    ),

    'ltisource/enlarge:useexp' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_SYSTEM,
        'archetypes' => array(
            'editingteacher' => CAP_ALLOW,
            'enlargedesigner' => CAP_ALLOW,
            'enlargemanager' => CAP_ALLOW
        ),
    ),

    'ltisource/enlarge:editexp' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_SYSTEM,
        'archetypes' => array(
            'enlargedesigner' => CAP_ALLOW,
            'enlargemanager' => CAP_ALLOW
        ),
    ),

    'ltisource/enlarge:createexp' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_SYSTEM,
        'archetypes' => array(
            'enlargedesigner' => CAP_ALLOW,
        ),
    )

);