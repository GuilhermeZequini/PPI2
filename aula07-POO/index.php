<?php

class Aluno
{

    public $name;
    public $idade;

    function __construct($name, $idade)
    {
        $this->name = $name;
        $this->idade = $idade;
    }

    

    function setName($name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    function setIdade($idade)
    {
        $this->idade = $idade;
    }

    function getIdade()
    {
        return $this->idade;
    }
}

$Aluno1 = new Aluno("Guilhrme", '18');
echo $Aluno1->getName();
echo "<br>";
echo $Aluno1->getIdade();
echo "<br>";


?>