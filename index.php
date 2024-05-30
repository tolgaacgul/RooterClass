<?php
session_start();
const BASEDIR = __DIR__;
const URL = 'localhost/RouterClass';
const DEV_MODE = true;

if (DEV_MODE == true) {
    error_reporting(E_ALL);
    ini_set('error_reporting', true);
}

foreach (glob(BASEDIR . '/functions/*.php') as $file) {
    require $file;
}