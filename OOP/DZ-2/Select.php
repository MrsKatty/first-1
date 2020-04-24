<?php

class Select extends Tag
{
    private $selectData;
    private $name;

    public function setInnerData(array $selectData)
    {
        $this->selectData = "";

        for ($i=0; $i < count($selectData); $i++) { 
            $this->selectData .= "\t<option value='$i'>$selectData[$i]</option>\n";
        }

        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }


    public function html()
    {
        return "<select id='$this->id' name='$this->name'>\n$this->selectData</select>\n";
    }
}
