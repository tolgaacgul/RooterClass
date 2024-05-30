<?php

function route($index)
{
    global $config;
    if (isset($config['route'][$index])) return $config['route'][$index];
    else return false;
}

function view($viewName, $pageData = [])
{
    $data = $pageData;

    if (file_exists(BASEDIR . "/View/" . $viewName . ".php")) {
        require BASEDIR . "/View/" . $viewName . ".php";
    } else {
        return false;
    }
}
function model($modelName, $pageData = [])
{
    $data = $pageData;

    if (file_exists(BASEDIR . "/Model/" . $modelName . ".php")) {
        require BASEDIR . "/Model/" . $modelName . ".php";
    } else {
        return false;
    }
}

function assets($assetsName)
{
    if (file_exists(BASEDIR . "/public/" . $assetsName)) {
        return URL . "/public/" . $assetsName;
    } else {
        return false;
    }
}
function lang($keyOrText)
{
    global $lang;
    if(isset($lang[$keyOrText])){
        return $lang[$keyOrText];
    }else{
        return $keyOrText;
    }
}



function post($key){
    if(isset($_POST[$key])){
        return htmlspecialchars(trim($_POST[$key]));
    }else return false;
}
function get($key){
    if(isset($_GET[$key])){
        return htmlspecialchars(trim($_GET[$key]));
    }else return false;
}

function addSession($key,$value){
    $_SESSION[$key] = $value;
}
function getSession($key){
    if(isset($_SESSION[$key])){
        return $_SESSION[$key];
    }else return false;
}

function addCookie($key,$value){
    $_COOKIE[$key] = $value;
}
function getCookie($key){
    if(isset($_COOKIE[$key])){
        return $_COOKIE[$key];
    }else return false;
}