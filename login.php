<?php
session_start();
include('config.php');

$email=$_POST['email'];
$password=$_POST['password'];


$dbresult=$mysqli->query("select * from tbl_user where email='$email' and  password='$password'");
        if($dbresult->num_rows >0){
          if(isset($_POST['capcode']) && md5($_POST['capcode'])==$_SESSION['randomnr2'])
                {
      
                       $User = mysqli_fetch_assoc($dbresult);
                       $_SESSION['user']=$User; 
                       $json = array("status" => true, "msg" => "ورود موفق");
                                
                           

           
                }else{
                     $json = array("status" => false, "msg" => "کد امنیتی اشتباه است");
                    
                }
        }else{
            $json = array("status" => false, "msg" => "ایمیل یا رمز عبور وارد شده صحیح نیست");
    
        }
        
        
        header('Content-type: application/json');
        echo json_encode($json);

?>