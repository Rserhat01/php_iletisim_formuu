<?php

    if(!$_POST){
        echo("Yanlış sayfaya geldiniz");
    }
    else{
        $isim_soyisim = $_POST["isim-soyisim"];
        $e_posta = $_POST["e-posta"];
        $konu = $_POST["konu"];
        $mesaj = $_POST["mesaj"];
        $ip = $_SERVER["REMOTE_ADDR"];
        if(!$isim_soyisim){
            echo("İsim soyisim boş bırakılmaz");
        }else{
            if(!$e_posta){
                echo("E-posta boş bırakılmaz");
            }
            else{
                if(!$konu){
                    echo("Konu boş bırakılmaz");
                }
                else{
                    if(!$mesaj){
                        echo("Mesaj boş bırakılmaz");
                    }
                    else{
                        echo("<b>İsim Soyisim:</b>".$isim_soyisim."<br>");
                        echo("<b>E-posta:</b>".$e_posta."<br>");
                        echo("<b>Konu:</b>".$konu."<br>");
                        echo("<b>Mesaj:</b>".$mesaj."<br>");
                        echo("<b>İP:</b>".$ip."<br>");
                    }
                }
            }    
        }
    }
?>