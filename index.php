<?php
session_start();
const BASEDIR = __DIR__;
foreach (glob(BASEDIR. '/functions/*.php') as $file) {
    require $file;
}

$config['route'][0] = 'home';
$config['lang'] = 'tr';

// ## Router (Tarayıcı çubuğundan) Parçalara ayrılır.
if (isset($_GET['route'])) {
    $pattern = "@(?<lang>\b[a-zA-Z]{2}\b)?/?(?<route>.+)/?@";
    preg_match($pattern, $_GET['route'], $matches);
}
// ## Dil Dosyalarını tarayıcıda girilen şekilde dahil et 
if (isset($matches['lang'])) {
    if (file_exists(BASEDIR . '/language/' . $matches['lang'] . '.php')) {
        $config['lang'] = $matches['lang'];
        require BASEDIR . '/language/' . $config['lang'] . '.php';
    } else {
        $config['lang'] = 'tr';
        require BASEDIR . '/language/' . $config['lang'] . '.php';
    }
}
// ## Controller Dosyalarını tarayıcıda girilen şekilde dahil et 
if(isset($matches['route'])){
    $config['route'] = explode('/', $matches['route']); //dizi oluşur
}

// ## Route CONTROLLER DE VAR MI 
if(file_exists(BASEDIR.'/Controller/'.$config['route'][0].'.php')){
    require BASEDIR.'/Controller/'.$config['route'][0].'.php';
}else{
    echo "Sayfa Bulunamadı";
}



echo $lang['title'];
