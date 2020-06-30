<?php
include('JsonConversie.class.php');

class Fifa
{
    //eigenschappen
    private $name = "";

    //constuctor
    function __construct($name)
    {
        $this->name = $name; // c. ronaldo
       // echo Het  is aangemaakt';
    }

    //methodes
    public function name()
    {
        return $this->name;
    }

    public function setFifaProperties() //setInfo()
    {
        $jsonconversie = new JsonConversie($this->name);
        $jsonconversie->setAPIUrl("http://www.easports.com/fifa/ultimate-team/api/fut/item?name="); //JSON URL

        $this->properties = $jsonconversie->Conversie();


        $this->name = $jsonconversie->getInfo("name");

    }
}



