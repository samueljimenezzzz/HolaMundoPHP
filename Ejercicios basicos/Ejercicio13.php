<?php

function sumarHastaCien(){
    $suma = 0;
    for($i = 0; $i<=100;$i++){
        $suma = $suma+$i;
    }
    return $suma;
}
sumarHastaCien();
?>