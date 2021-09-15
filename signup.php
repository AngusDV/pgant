<?php
session_start();
include('config.php');
$family=$_POST['family'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];
$password_retype=$_POST['password_retype'];

$dbresult=$mysqli->query("select * from tbl_user where email='$email' or  mobile='$mobile'");
        if($dbresult->num_rows ==0){
          if(isset($_POST['capcode']) && md5($_POST['capcode'])==$_SESSION['randomnr2'])
                {
             if($password==$password_retype){
                            $result = $mysqli->query("INSERT INTO  tbl_user (`family`, `mobile`,  `email`,`password`) VALUES ( '".$family."',  '".$mobile."', '".$email."', '".$password."')"); 
                            $user_id=$mysqli->insert_id;
                            $mysqli->query('update tbl_user set  md5id="'.md5($user_id).'" , active_email=0 where id='. $user_id);
                            
                            $EmailTo = $email;
                            $Subject = "تایید ایمیل  pgant.ir";
 
                            // prepare email body text
                            $Body .= "با سلام";
                            $Body .= "\n";
                            $Body .= "لطفا برای تایید ایمیل خود بر روی لینک زیر کلیک کنید ";
                            $Body .= "\n";
                            
                            $Body .= "http://pgant.ir/?ActiveUser=".md5($user_id);
                            
                            
                            $Body .= "\n";
                            $Body .= "با تشکر";
                            $Body .= "\n";
                             
                           
                             
                            // send email
                            $success = mail($EmailTo, $Subject, $Body, "From:info@pgant.ir");
                            
                              if ($success){
                                     $json = array("status" => true, "msg" => "ثبت نام شما با موفقیت انجام شد یک ایمیل به ایمیل شما ارسال شده است لطفا ایمیل مذکور را تایید کنید با تشکر");
                                 }else{
                                     $json = array("status" => false, "msg" => "متاسفانه ایمیل تایید ارسال نشد");
                                 }
                            
                           

             }else{
                 
                             
                             $json = array("status" => false, "msg" => "رمز عبور و تکرار رمز عبور تطابق ندارد");
             }
                }else{
                     $json = array("status" => false, "msg" => "کد امنیتی اشتباه است");
                    
                }
        }else{
            $json = array("status" => false, "msg" => "با این ایمیل یا شماره موبایل قبلا ثبت نام شده است");
    
        }
        
        
        header('Content-type: application/json');
        echo json_encode($json);

?>