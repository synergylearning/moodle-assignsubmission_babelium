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
 * This file contains the version information for the babelium submission plugin
 *
 * @package    assignsubmission_babelium
 * @copyright  2012 Babelium Project {@link http://babeliumproject.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2012090600;
$plugin->release   = '0.9.6 (Build: 2012090600)';

$plugin->requires  = 2012062500;  // moodle 2.3

$plugin->component = 'assignsubmission_babelium';
$plugin->cron      = 0;
$plugin->maturity  = MATURITY_BETA;
