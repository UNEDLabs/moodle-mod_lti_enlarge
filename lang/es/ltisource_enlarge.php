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
 * Spanish language file for the LTI ENLARGE sub-plugin
 *
 * @package    mod_lti_enlarge
 * @copyright  2015 Luis de la Torre
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$string['pluginname'] = 'LTI ENLARGE';
$string['addenlarge'] = 'ENLARGE';
$string['addenlarge_help'] = 'ENLARGE es un sistema que facilita la gestión de laboratorios remotos. Esta actividad ofrece acceso LTI a su software';
$string['modenlargename'] = 'lti:ENLARGE';

// Strings for capabilities.
$string['enlarge:addinstance'] = 'Añadir nuevas actividades LTI ENLARGE';
$string['enlarge:view'] = 'Ver actividades LTI ENLARGE';
$string['enlarge:useexp'] = 'Asignar experiencias ENLARGE existentes a actividades EJSApp';
$string['enlarge:editexp'] = 'Editar experiencias ENLARGE existentes';
$string['enlarge:createexp'] = 'Crear y borrar experiencias ENLARGE';

// Strings for new roles.
$string['enlargedesigner'] = 'Diseñador ENLARGE';
$string['enlargedesigner_desc'] = 'Los diseñadores ENLARGE pueden crear, borrar, editar y usar experiencias ENLARGE, asi como asignar usuarios gestores';
$string['enlargemanager'] = 'Gestor ENLARGE';
$string['enlargemanager_desc'] = 'Los gestores ENLARGE pueden editar y usar experiencias ENLARGE';

// Privacy
$string['privacy:metadata:lti_client'] = 'Para integrarse con el servicio LTI de ENLARGE, es necesario intercambiar datos de usuarios con dicho servicio.';
$string['privacy:metadata:lti_client:userid'] = 'El userid se manda desde Moodle para permitirte acceder a tus datos en myFrontier.';
$string['privacy:metadata:lti_client:fullname'] = 'Tu nombre completo se envia a myFrontier para permitir una mejor experiencia de usuario.';
$string['privacy:metadata:lti_client:role'] = 'Tu rol de usuario en el curso se envia a myFrontier para habilitar/deshabilitar opciones de acuerdo a tus permisos.';