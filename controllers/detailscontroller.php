<?php 
    require_once("database/dbconnect.php");
    class detailscontroler{
        public function construct(){

        }
        public function getSP($ProID){
            $db = new dbconnect();
            $sql = "select A.ProID, A.CatID, A.ProName, A.ProDescription, A.MoreImage, A.ProImage, B.Cost from dbshop.product A, price B where A.ProId=B.ProID and A.ProID = $ProID;";
            $result = $db->getOne($sql);
            return ($result);
        }

        public function getSameSP($CatID){
            $db = new dbconnect();
            $sql = "select A.ProID, A.ProName, A.ProImage, B.Cost from dbshop.product A, price B where A.ProId=B.ProID and A.CatID = $CatID limit 4;";
            $result = $db->getOne($sql);
            return ($result);
        }
    }
?>