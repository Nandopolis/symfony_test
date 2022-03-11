<?php

namespace App\DTO;

use DateTime;

class Persona
{
    private ?string $nombre;
    private ?string $apellido;
    private ?DateTime $nacimiento;

    public function setNombre(?string $nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setApellido(?string $apellido)
    {
        $this->apellido = $apellido;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function setNacimiento(?DateTime $datetime)
    {
        $this->nacimiento = $datetime;
    }

    public function getNacimiento()
    {
        return $this->nacimiento;
    }

}