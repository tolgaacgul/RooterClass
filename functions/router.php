<?php
/*
*Router dil ve route kısmını tarayıcıdan 
*ayrıştırarak yönlendirme yapar
*Yönlendirme controlerdanbaşlar
*/
$config['route'][0] = 'home';
$config['lang'] = 'tr';
// ## Router (Tarayıcı çubuğundan) Parçalara ayrılır.
if (isset($_GET['route'])) {
    $pattern = "@(?<lang>\b[a-zA-Z]{2}\b)?/?(?<route>.+)@";
    preg_match($pattern, $_GET['route'], $matches);

    // ## Dil Dosyalarını tarayıcıda girilen şekilde dahil et 
    if (isset($matches['lang'])) { //tr,en 
        if (file_exists(BASEDIR . '/language/' . $matches['lang'] . '.php')) {
            $config['lang'] = $matches['lang'];
            require BASEDIR . '/language/' . $config['lang'] . '.php';
        } else {
            require BASEDIR . '/language/' . $config['lang'] . '.php';
        }
    } else {
        require BASEDIR . '/language/' . $config['lang'] . '.php';
    }

    // ## Controller Dosyalarını tarayıcıda girilen şekilde dahil et 
    if (isset($matches['route'])) {
        $config['route'] = explode('/', $matches['route']); //dizi oluşur

        // ## Route CONTROLLER DE VAR MI 
        if (file_exists(BASEDIR . '/Controller/' . $config['route'][0] . '.php')) {
            require BASEDIR . '/Controller/' . $config['route'][0] . '.php';
        } else {
            echo "Sayfa Bulunamadı";
        }
    } else {
        require BASEDIR . '/Controller/home.php';
    }
}
