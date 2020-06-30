<?php
class JsonConversie
{

    public $url = "";
    private $input = "";
    private $data = "";

    function __construct($input)
    {
        $this->input = $input;
    }

    function setAPIUrl($url)
    {
        $this->url = $url;
    }

    function Conversie()
    {
        $json = file_get_contents($this->url . "" . $this->input);

        return $this->data = json_decode($json, true);
    }

    function getInfo($whichInfo)
    {
        return $this->data[$whichInfo];
    }
}
