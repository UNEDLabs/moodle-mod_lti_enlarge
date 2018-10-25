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
 * Spanish language file for the LTI Sarlab sub-plugin
 *
 * @package    mod_lti_sarlab
 * @copyright  2015 Luis de la Torre
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

$string['pluginname'] = 'LTI Sarlab';
$string['addsarlab'] = 'Sarlab';
$string['addsarlab_help'] = 'Sarlab es un sistema que facilita la gestión de laboratorios remotos. Esta actividad ofrece acceso LTI a su software';
$string['modsarlabname'] = 'lti:Sarlab';

// Strings for capabilities.
$string['sarlab:addinstance'] = 'Añadir nuevas actividades LTI Sarlab';
$string['sarlab:view'] = 'Ver actividades LTI Sarlab';
$string['sarlab:useexp'] = 'Asignar experiencias Sarlab existentes a actividades EJSApp';
$string['sarlab:editexp'] = 'Editar experiencias Sarlab existentes';
$string['sarlab:createexp'] = 'Crear y borrar experiencias Sarlab';

// Strings for new roles.
$string['sarlabdesigner'] = 'Diseñador Sarlab';
$string['sarlabdesigner_desc'] = 'Los diseñadores Sarlab pueden crear, borrar, editar y usar experiencias Sarlab, asi como asignar usuarios gestores';
$string['sarlabmanager'] = 'Gestor Sarlab';
$string['sarlabmanager_desc'] = 'Los gestores Sarlab pueden editar y usar experiencias Sarlab';

// Privacy
$string['privacy:metadata:lti_client'] = 'Para integrarse con el servicio LTI de Sarlab, es necesario intercambiar datos de usuarios con dicho servicio.';
$string['privacy:metadata:lti_client:userid'] = 'El userid se manda desde Moodle para permitirte acceder a tus datos en Sarlab.';
$string['privacy:metadata:lti_client:fullname'] = 'Tu nombre completo se envia a Sarlab para permitir una mejor experiencia de usuario.';
$string['privacy:metadata:lti_client:role'] = 'Tu rol de usuario en el curso se envia a Sarlab para habilitar/deshabilitar opciones de acuerdo a tus permisos.';