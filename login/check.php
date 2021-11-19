<?php 
session_start(); /* Starts the session */

/* Check Login form submitted */
if(isset($_POST['Submit'])){

    /* Define username and associated password array */
    $data_user = array(
        'muhamadtaopik007@gmail.com' => '1q2w3e4r',
        'email1' => 'password1',
        'email2' => 'password2'
    );

    /* Check and assign submitted Username and Password to new variable */
    $Email = isset($_POST['Email']) ? $_POST['Email'] : '';
    $Password = isset($_POST['Password']) ? $_POST['Password'] : '';

    /* Check Username and Password existence in defined array */
    if (isset($data_user[$Email]) && $data_user[$Email] == $Password){
        
    /* Success: Set session variables and redirect to Protected page  */
    $_SESSION['UserData']['Email']=$data_user[$Email];
    header("location:home.php");
    exit;
    } 
    else {
        /*Unsuccessful attempt: Set error message */
        $msg= header("location:error.php");
    }
}
?>