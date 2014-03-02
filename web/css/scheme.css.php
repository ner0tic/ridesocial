<?php
//    header("Content-Type: text/css");
    $color[0]   =   $orange     =   '#ff7f00';
    $color[1]   =   $offWhite   =   '#f8f8f5';
    $color[2]   =   $white      =   '#ffffff';
    $color[3]   =   $black      =   '#000000';
    $color[4]   =   $offBlack   =   '#666666';
    $color[5]   =   $paleOrange =   '#fff3e8';
    $color[6]   =   $medGray    =   '#e2d6c9';
    $color[7]   =   $dkOrange   =   '#d98162';
    $color[8]   =   $red        =   '#a65858';
    $color[9]   =   $yellow     =   '#d9ca9c';
    $color[10]  =   $ltGreen    =   '#888c65';
    $color[11]  =   $dkGreen    =   '#174040';
    
    function rgba($color, $opacity = 1, $retAsStr = false, $sep = ',') {
      if(substr($color,0,1) == '#') $color = substr($color,1);
      $color = hex2rgb($color);
      $color = array_merge($color, array('alpha' => $opacity));
      return $retAsStr ? implode($sep,$color) : $color;
    }
    
    function hex2rgb($hex,$retAsStr = false, $sep = ',') {
      $hex = preg_replace("/[^0-9A-Fa-f]/",'',$hex);
      if(strlen($hex) == 6) {
        $cVal = hexdec($hex);
        $rgb = array(
          'red'   =>  0xFF & ($cVal >> 0x10),
          'green' =>  0xFF & ($cVal >> 0x8),
          'blue'  =>  0xFF & $cVal  
        );
      } elseif(strlen($hex) == 3) {
        $rgb = array(
          'red'   =>  hexdec(str_repeat(substr($hex, 0, 1), 2)),
          'green' =>  hexdec(str_repeat(substr($hex, 1, 1), 2)),
          'blue'  =>  hexdec(str_repeat(substr($hex, 2, 1), 2))
        );
      }
      else  return false;
      return $retAsStr ? implode($sep,$rgb) : $rgb;
    }
?>