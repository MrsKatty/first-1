<?php

class B extends Tag
{
    public function html()
    {
        return "<b class='$this->class' id='$this->id'>$this->innerText</b> ";
    }
}
