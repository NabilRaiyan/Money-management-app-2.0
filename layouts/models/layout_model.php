<?php

    class Model {
        // connection open
        function OpenCon(){
            $conn = new mysqli("localhost", "root", "", "financialmanagementsystem");
            return $conn;
        }

        // function for queries
        function get_user_type($conn, $table){
            $sql = "SELECT u_id, usertype, money FROM $table";
            $result = $conn->query($sql);
            return $result; 
        }
        function PersonalcheckLogin($conn,$table, $email,$password){
            $sql="SELECT * from $table WHERE P_mail = '$email' AND 
            P_password = '$password'";
            $result = $conn->query($sql);
            return $result;
          }
          function BusinesscheckLogin($conn,$table, $email,$password){
            $sql="SELECT * from $table WHERE B_mail = '$email' AND 
            B_password = '$password'";
            $result = $conn->query($sql);
            return $result;
          }
    }



?>