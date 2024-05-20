<?php

class Model
{
    // creating Connection method
    function OpenConn()
    {
        $conn = new mysqli("localhost", "root", "", "financialmanagementsystem");
        return $conn;

    }







}