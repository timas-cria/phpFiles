<?php 

namespace Source\Models\Hospital;
use Source\Models\User;

class Doctor extends User{
    private $crm;
    private $specialty;

    public function __construct(
        int $id = null,
        string $name = null,
        string $email = null,
        string $password = null,
        string $crm = null,
        string $specialty = null
    ){
        parent::__construct($id, $name, $email, $password);
        $this->crm = $crm;
        $this->specialty = $specialty;
    }

    public function getCrm(): ?string
    {
        return $this->crm;
    }

    public function setCrm(?string $crm): void
    {
        $this->crm = $crm;
    }

    public function getSpecialty(): ?string
    {
        return $this->specialty;
    }

    public function setSpecialty(?string $specialty): void
    {
        $this->specialty = $specialty;
    }
}