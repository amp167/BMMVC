<?php
session_start();
function redirect($page){
    header("Location:".$page);
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
function setCurrentId($value){
    if (isset($_SESSION['currentId'])){
        unset($_SESSION['currentId']);
    }
    $_SESSION['currentId'] = $value;
}
function getCurrentId(){
    if (isset($_SESSION['currentId'])){
        return $_SESSION['currentId'];
    }
}
function unsetCurrentId(){
    if (isset($_SESSION['currentId'])){
        unset($_SESSION['currentId']);
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
function setCurrentCategory($id){
    if ($_SESSION['currentCategory']){
        unset($_SESSION['currentCategory']);
    }
    $_SESSION['currentCategory'] = $id;
}
function getCurrentCategory()
{
    if ($_SESSION['currentCategory']){
        return $_SESSION['currentCategory'];
    }else{
        return false;
    }
}
function unsetCurrentCategory()
{
    unset($_SESSION['currentCategory']);
}
