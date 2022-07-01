<?php


namespace APP\Model;

class Address
{
private string $publicPlace;
private int $streetNumber; 
private string $neighborhood;
private string $city;
private string $postalCode;

    public function __construct(
    string $publicPlace,
    int $streetNumber,
    string $neighborhood,
    string $city,
    string $postalCode,
    )
        {
        $this->publicPlace = $publicPlace;
        $this->streetNumber= $streetNumber;
        $this->neighborhood=$neighborhood;
        $this->city=$city;
        $this->postalCode= $postalCode;
        }

}





?>