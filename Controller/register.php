<?php

echo "# register CONTROLLER <br>"; 

{
    $arr = ['id' => 3, 'name' => 'Giray Altınok'];
    view('register', $arr);

}
if (route(1) == '?') {
  // sonraki parametre tarayıcıdaki URL den gelen
}



echo "# -register CONTROLLER<br>";
