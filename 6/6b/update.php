<?php
include "conf/koneksi.php";

if(isset($_POST['id_cashier'])){

$sql=mysqli_query($con, "Update product set id_cashier='$_POST[id_cashier]'
											name='$_POST[name]',
											id_category='$_POST[id_category]',
                                            price='$_POST[price]'");
                        
                         


    if(sql){
        header('location:index.php');

    }else{
        echo"Data Gagal Disimpan"; 
    }

}

?>