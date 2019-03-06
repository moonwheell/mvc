<?php

echo 'Model.php';

class Model
{
    protected $db = null;

    public function __construct()
    {
        $this->db = DB::cnnnToDB();
    }
}
