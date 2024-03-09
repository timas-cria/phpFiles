<?php 

require __DIR__. "/source/autoload.php";

use Source\Models\School\ClassRoom;
use Source\Models\School\Student;

$school = new ClassRoom();
$student = new Student();
var_dump($school, $student);

phpinfo();