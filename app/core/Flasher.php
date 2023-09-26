<?php

class Flasher 
{
public static function setFlash($pesan,$aksi,$tipe)
{


    $_SESSION['flash'] = 
    [
     'pesan' => $pesan,
     'aksi' => $aksi,
     'tipe' => $tipe
    ];

}

public static function flash()
{
    if(isset($_SESSION['flash'])){
        echo'<div class="alert alert-'.$_SESSION['flash']['tipe'].'" role="alert">
        <h4 class="alert-heading">'.$_SESSION['flash']['aksi'].'!</h4>
        <p>'.$_SESSION['flash']['pesan'].'</p>
        
      </div>';
      unset($_SESSION['flash']);
    }
}
}