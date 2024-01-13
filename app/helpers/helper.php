<?php
session_start();
function redirect($page){
    header("Location".$page);
}
function flash($name='',$message=''){
    if (!empty($name)){
        if (!empty($message)){
            if (isset($_SESSION[$name])){
                unset($_SESSION[$name]);
            }
            $_SESSION[$name] = $message;
        }else{
            if (isset($_SESSION[$name])){
                echo "<div class='alert alert-success'>".$_SESSION[$name]."</div>";
                unset($_SESSION[$name]);
            }
        }
    }
}
 function setSessionUser($user){
    $_SESSION['currentUser'] = $user;
}
 function getSessionUser(){
    if (isset($_SESSION['currentUser'])){
        return $_SESSION['currentUser'];
    }else{
        return false;
    }
}
 function unsetSessionUser(){
    unset($_SESSION['currentUser']);
}