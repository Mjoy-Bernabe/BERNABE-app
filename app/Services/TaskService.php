<?php

namespace App\Services;

class TaskService
{

    private $tasks;

public function add($name)
{
   return $this->tasks[] = $name;}

public function getAllTask()
{
    return $this->tasks;    
}
}