<?php
session_start(); //session start


require_once ('libraries/Google/autoload.php');


//Insert your cient ID and secret
//You can get it from : https://console.developers.google.com/
$client_id = '280461158607-vjr1o3pvg98jpc15mc1ml08nodi9m61a.apps.googleusercontent.com';
$client_secret = 'SjYxid50dAhpZEUcFG1NaMcX';
$redirect_uri = 'http://pgant.ir/include/google-login-api/index.php';


//database
$db_username = "pgant_admin"; //Database Username
$db_password = "hassanest50"; //Database Password
$host_name = "localhost"; //Mysql Hostname
$db_name = 'pgant_db'; //Database Name


//incase of logout request, just unset the session var
if (isset($_GET['logout'])) {
  unset($_SESSION['access_token']);
}


/************************************************
  Make an API request on behalf of a user. In
  this case we need to have a valid OAuth 2.0
  token for the user, so we need to send them
  through a login flow. To do this we need some
  information from our API console project.
 ************************************************/
$client = new Google_Client();
$client->setClientId($client_id);
$client->setClientSecret($client_secret);
$client->setRedirectUri($redirect_uri);
$client->addScope("email");
$client->addScope("profile");


/************************************************
  When we create the service here, we pass the
  client to it. The client then queries the service
  for the required scopes, and uses that when
  generating the authentication URL later.
 ************************************************/
$service = new Google_Service_Oauth2($client);


/************************************************
  If we have a code back from the OAuth 2.0 flow,
  we need to exchange that with the authenticate()
  function. We store the resultant access token
  bundle in the session, and redirect to ourself.
*/


if (isset($_GET['code'])) {
  $client->authenticate($_GET['code']);
  $_SESSION['access_token'] = $client->getAccessToken();
  header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
  exit;
}


/************************************************
  If we have an access token, we can make
  requests, else we generate an authentication URL.
 ************************************************/
if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
  $client->setAccessToken($_SESSION['access_token']);
} else {
  $authUrl = $client->createAuthUrl();
}




//Display user info or display login url as per the info we have.

if (isset($authUrl)){
   header('Location: ' . $authUrl);
    /*
    echo '<div style="margin:20px">';
    //show login url
    echo '<div align="center">';
    echo '<h3>ورود با اکانت گوگل</h3>';
    echo '<div>لطفا بر روی دکمه زیر کلیک نمایید با تشکر</div>';
    echo '<a class="login" href="' . $authUrl . '"><img src="images/google-login-button.png" /></a>';    
echo '</div>';
*/

} else {


    $user = $service->userinfo->get(); //get user info


    // connect to database
    $mysqli = new mysqli($host_name, $db_username, $db_password, $db_name);    
if ($mysqli->connect_error) {
        die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }


    //check if user exist in database using COUNT
    $result = $mysqli->query("SELECT COUNT(google_id) as usercount FROM google_users WHERE google_id=$user->id");
    $user_count = $result->fetch_object()->usercount; //will return 0 if user doesn't exist


    //show user picture
    echo '<img src="'.$user->picture.'" style="float: right;margin-top: 33px;" />';


    if($user_count) //if user already exist change greeting text to "Welcome Back"   
 {
        //echo 'سلام  '.$user->name.'! [<a href="'.$redirect_uri.'?logout=1">خروج</a>]';
        $dbresult = $mysqli->query("select * from tbl_user where id_google=".$user->id);
                                    $User = mysqli_fetch_assoc($dbresult);
                                    if ($dbresult->num_rows > 0){
                                        
                                    $_SESSION['user']=$User; 
                                        ?>
                                        <script>
                                            window.close();
                                        </script>
                                        <?php
                                    }
    }
    else //else greeting text "Thanks for registering"
    { 
      // echo 'Hi '.$user->name.', ثبت نام شما موفقیت آمیز بود [<a href="'.$redirect_uri.'?logout=1">خروج</a>]';
      
         $result = $mysqli->query("INSERT INTO  tbl_user (`email`, `family`,  `id_google`) VALUES ( '".$user['email']."',  '".$user['givenName']." ".$user['familyName']."', '".$user['id']."')"); 
         $user_id=$mysqli->insert_id;
         if($user_id>0){
        $statement = $mysqli->prepare("INSERT INTO google_users (google_id, google_name, google_email, google_link, google_picture_link) VALUES (?,?,?,?,?)");        
        $statement->bind_param('issss', $user->id,  $user->name, $user->email, $user->link, $user->picture);
        
        $statement->execute();  
        
         
         $mysqli->query('update tbl_user set  md5id="'.md5($user_id).'" , active_email=1 where id='. $user_id);
       
         $dbresult = $mysqli->query("select * from tbl_user where id=".$user_id);
                                    $User = mysqli_fetch_assoc($dbresult);
                                    if ($dbresult->num_rows > 0){
                                        
                                    $_SESSION['user']=$User; 
                                        ?>
                                        <script>
                                            window.close();
                                        </script>
                                        <?php
                                    }
      
         }
       
        
       // echo $mysqli->error;
    }


    //print user details
   /*
    echo '<pre>';
    print_r($user);
    print_r($user['familyName']);
    print_r($user['givenName']);
    print_r($user['email']);
    print_r($user['picture']);
    print_r($user['verifiedEmail']);
    echo '</pre>';*/}


echo '</div>';
    

?> 