<?php
session_start();



        if(isset($_SESSION['user']))
        {
                unset($_SESSION['user']);
        }
            $json = array("status" => true, "msg" => "خروج موفقیت آمیز بود");
    
        
        
        
        header('Content-type: application/json');
        echo json_encode($json);

?>