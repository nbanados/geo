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
 //a
/**
 * 
 * @package    local
 * @subpackage reservasalas
 * @copyright  2014 Francisco García Ralph (francisco.garcia.ralph@gmail.com)
 * 					Nicolás Bañados Valladares (nbanados@alumnos.uai.cl)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
require_once(dirname(__FILE__) . '/../../config.php');
require_once($CFG->libdir.'/formslib.php');

class comment extends moodleform {
	function definition() {
		global $CFG;
		$mform =& $this->_form;

		$mform->addElement('text', 'comment','Ingrese un comentario');
		$mform->setType('comment', PARAM_TEXT);
		$this->add_action_buttons(true,'Enviar');//true es q tendra boton cancelar


	}
}