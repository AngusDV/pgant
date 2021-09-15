<?php
session_start();
include('config.php');

$email=$_POST['email'];



$dbresult=$mysqli->query("select * from tbl_user where email='$email'");
        if($dbresult->num_rows >0){
          if(isset($_POST['capcode']) && md5($_POST['capcode'])==$_SESSION['randomnr2'])
                {
           
                        $User = mysqli_fetch_assoc($dbresult);     
                            
                            $EmailTo = $email;
                            $Subject = "رمز عبور فراموش شده  pgant.ir";
 
                            // prepare email body text
                            $Body .= "با سلام";
                            $Body .= "\n";
                            $Body .= "رمز عبور شما عبارت است از : ";
                            $Body .= "\n";
                            
                            $Body .= $User['password'];
                            $Body .= "\n";
                            $Body .= "لطفا در حفظ آن کوشا باشید";
                            
                            $Body .= "\n";
                            $Body .= "با تشکر";
                            $Body .= "\n";
                             
                           
                             
                            // send email
                            $success = mail($EmailTo, $Subject, $Body, "From:info@pgant.ir");
                            
                              if ($success){
                                     $json = array("status" => true, "msg" => "رمز عبور به ایمیل شما با موفقیت ارسال شد");
                                 }else{
                                     $json = array("status" => false, "msg" => "متاسفانه ایمیل فراموشی رمز عبور ارسال نشد");
                                 }
                            
                           

           
                }else{
                     $json = array("status" => false, "msg" => "کد امنیتی اشتباه است");
                    
                }
        }else{
            $json = array("status" => false, "msg" => "کاربری با این ایمیل وجود ندارد");
    
        }
        
        
        header('Content-type: application/json');
        echo json_encode($json);

?>