<?php 

class category{
    public $icon;
    public $name;

    public function __construct(
        String $icon,
        String $name
    ){
        $this->icon = $icon;
        $this->name = $name;
    }
}


?>