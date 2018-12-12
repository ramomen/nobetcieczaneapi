<?php
function ara($bas, $son, $yazi)
    {
      @preg_match_all('/' . preg_quote($bas, '/') .
      '(.*?)'. preg_quote($son, '/').'/i', $yazi, $m);
      return @$m[1];
    }
    $sehir = 'konya';
    $ilce = 'seydisehir';
    $link = "https://nobet.org/$sehir/$ilce/nobetci-eczaneler.html";

    $icerik = file_get_contents($link);
    $goster = ara('<span>','</span>',$icerik);
    echo '<h2> '.$goster[12].' Eczanesi<br/> Adres = '.$goster[13].' </br>  Telefon: '.$goster[14].'</h2>';

    ?>
