<?php 
    require_once("database/dbconnect.php");
    class homecontroller{
        public function construct(){

        }
        public function getMenu(){
            $db = new dbconnect();
            $sql = "SELECT ID, Text FROM menu where ParentID IS NULL";
            $result = $db->query($sql);
            return ($result);
        }
        public function getHot(){
            $db = new dbconnect();
            $sql = "select ProID, ProName, ProImage from dbshop.product limit 5";
            $result = $db->query($sql);
            return ($result);
        }
    }
?>