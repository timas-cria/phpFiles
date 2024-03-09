<?php 

require __DIR__ . "/source/autoload.php";
use Source\Models\Hospital\Patient;
use Source\Models\Hospital\Doctor;

$patient = new Patient(
    10,
    "Paciente Fábio",
    "fabio@gmail.com",
    "12345678",
    "12/02/1976",
    "sobreviveu"
);
echo "<p>paciente {$patient->getId()}, {$patient->getName()}</p>";
echo "<p>{$patient->getEmail()}, {$patient->getPassword()}</p>";
echo "<p>{$patient->getBirthDate()}, {$patient->getMedicalRecord()}</p>";
echo "<br>";
$doctor = new Doctor(
    15,
    "Doutor Fábio",
    "fabio@hotmail.com",
    "12345678",
    "123456ab",
    "Cardiologia"
);
echo "<p>paciente {$doctor->getId()}, {$doctor->getName()}</p>";
echo "<p>{$doctor->getEmail()}, {$doctor->getPassword()}</p>";
echo "<p>{$doctor->getCrm()}, {$doctor->getSpecialty()}</p>";
echo "<br>";