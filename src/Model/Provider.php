<?php

namespace APP\Model;
class Provider{

    private int $cnpj;
    private string $name;
    private Address $address;



        public function __construct(
        int $cnpj,
        string $name,
        Address $address
        )
    {

    $this->cnpj = $cnpj;
    $this->name = $name;
    $this->address = $address;

    }
}

?>