<?php  /// Moodle Configuration File 

unset($CFG);

$CFG = new stdClass();
$CFG->dbtype    = 'mysql';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'nubeduca_moooo';
$CFG->dbuser    = 'nubeduca_jana';
$CFG->dbpass    = 'ucsaoc.123';
$CFG->dbpersist =  false;
$CFG->prefix    = 'mdl_';

$CFG->wwwroot   = 'http://aula.nubeducativa.cl';
$CFG->dirroot   = '/home/nubeduca/public_html/aula';
$CFG->dataroot  = '/home/nubeduca/moodledata';
$CFG->admin     = 'admin';
//$CFG->respectsessionsettings = 'true';

$CFG->directorypermissions = 00777;  // try 02777 on a server in Safe Mode

$CFG->passwordsaltmain = '.Z3F~%S9FFpCaPyp~~y`D37Y:h{0';

require_once("$CFG->dirroot/lib/setup.php");
// MAKE SURE WHEN YOU EDIT THIS FILE THAT THERE ARE NO SPACES, BLANK LINES,
// RETURNS, OR ANYTHING ELSE AFTER THE TWO CHARACTERS ON THE NEXT LINE.
?>
