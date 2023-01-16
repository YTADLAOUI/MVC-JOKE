<?php
class JokeController{
   function GetAllEmployes(){
        $jokes=Joke::getAll();
        return $jokes;
    } 
} 

?>