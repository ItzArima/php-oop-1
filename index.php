<?php

class Movie
{
    public $name;
    public $year;
    public $language;
    public $description;

    function __construct(String $name, Int $year, String $language, String $description){
        $this->name = $name;
        $this->year = $year;
        $this->language = $language;
        $this->description = $description;
    } 

    public function getData()
    {
        return 
            '<br>' .
            'name : ' . $this->name . '<br>' .
            'year : ' . $this->year . '<br>' .
            'language : ' . $this->language . '<br>' .
            'description : ' . $this->description . 
            '<br>' ;
    }

}

$matrix = new Movie('Matrix' , '2000' , 'en-us' , 'lorem ipsum');
echo '<pre>';
print_r($matrix);
echo '<pre>';
var_dump($matrix->getData());
echo '<pre>';