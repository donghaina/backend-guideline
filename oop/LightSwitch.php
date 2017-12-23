<?php

class LightSwitch
{
    public function on(){
        $this->connect();
    }

    public function off(){

    }

    private function connect(){
        var_dump('connect');
    }
}

$light = new LightSwitch();

$light->on();

