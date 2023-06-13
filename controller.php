<?php

    //conection to database
    $db = mysqli_connect("localhost", "root", "", "simulasi_dua");

    //insert new user
    function addUser($add) {
        

        global $db;

        $name = htmlspecialchars($add['name']);
        $email = htmlspecialchars($add['email']);
        $address = htmlspecialchars($add['address']);

        $query = "INSERT INTO guests 
                VALUES ('', '$name', '$email', '$address')";

        mysqli_query($db, $query);
        return mysqli_affected_rows($db);
    }

    //read from database
    function read($query) {

        global $db;

        $result = mysqli_query($db, $query);
        $rows = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        } 
        return $rows;
    }

    //update user
    function updateUser($update) {

        global $db;

        $id = $update["id"];
        $name = htmlspecialchars($update["name"]);
        $email = htmlspecialchars($update["email"]);
        $address = htmlspecialchars($update["address"]);

        $query = (" UPDATE guests SET

                    name = '$name',
                    email = '$email',
                    address = '$address'

                    WHERE id = $id
                    ");
        
        mysqli_query($db, $query);

        return mysqli_affected_rows($db);

    }

    //delete user
    function deleteUser ($id) {

        global $db;

        mysqli_query($db, "DELETE FROM guests WHERE id = $id");
        return mysqli_affected_rows($db);
    }

?>