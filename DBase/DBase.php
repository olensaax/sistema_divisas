<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DBase
 *
 * @author labtel
 */
class DBase {

    //put your code here

    public function get_conexion() {

        $user = "root";
        $pass = "123456";
        $host = "localhost";
        $db = "divisasdb";
        $conexion = new PDO("mysql:host=$host;dbname=$db;port=3305;", $user);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $conexion;
    }

}