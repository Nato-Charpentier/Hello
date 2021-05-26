<?php
    include __DIR__ . '/../connexion/connexiondb.php';

class langue {
     
    /**
     * the renetid function reset the table, it removes all the save fields and returns the id to 0.
     *
     * return void
     */
    public function renetid(){

        global $conn;

        $request_renet = "ALTER TABLE langue AUTO_INCREMENT = 1";
        $request_delete = "DELETE FROM `langue`"; 

        $conn->query($request_delete);
        $conn->query($request_renet);

    }

    /**
     * create 1 language.
     *
     * param [string] $name
     * param [string] $translate
     * return void
     */
    public function createLangue($name,$translate){

        global $conn;

        $request_insert = "INSERT INTO `langue` (`name`,`translate`) VALUES ('" . $name . "','" . $translate . "')";

        $conn->query($request_insert);
    }

    /**
     * I get the language list.
     *
     * return void
     */
    public function getAllLangue(){

        global $conn;
        
        $request_all = "SELECT * FROM `langue`";
        $get_all_langue = $conn->query($request_all);

        return $get_all_langue;
    }

    /**
     * deletes the language select in the tables.
     *
     * param [int] $id
     * return void
     */
    public function deleteLangue($id){

        global $conn;

        $delete_langue_request = "DELETE FROM `langue` WHERE id=".$id;
        $conn->query($delete_langue_request);
    }

    /**
     * updates the language select in the tables.
     *
     * param [int] $id
     * param [string] $name
     * param [string] $translate
     * return void
     */
    public function updateLangue($id,$name,$translate){

        global $conn;

        $update = "UPDATE `langue` SET `name`='".$name."',`translate`='".$translate."' WHERE `id`=".$id;
        $conn->query($update);
    }

}
?>