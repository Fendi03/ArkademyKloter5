<?php 
    $string = "Negara Kesatuan Republik Indonesia";
    $hasil = "NKRI";
    
    function tampil($hasil){
        $array = [$hasil];
        return json_encode($array);
    }

    echo tampil($hasil);
?>