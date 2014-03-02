<?php
    header("Content-Type: text/css");
    require_once('scheme.css.php');
?>
body { margin: 0 !important; background: <?php echo $offBlack ?>;}
@font-face { font-family: "Hobo"; src: url('HoboStd.otf'); }

a:link, a:visited, a:active { color: <?php echo $orange ?>; text-decoration: none; font-weight : bold;}
a:hover { color: <?php echo $orange ?>; text-decoration: none; font-weight: bold;}

h1 { font-size : 24px; color : <?php echo $orange ?>; font-weight : bold; margin: 0;}
h2 { font-size : 24px; color : <?php echo $orange ?>; font-weight : normal; margin: 0;}
h3 { font-size : 18px; color : <?php echo $orange ?>; font-weight : normal; line-height: 20pt; margin: 0;}



header { z-index: 100; width: 100%; height: 50px; background: transparent url('/images/header-bg.png') bottom left repeat-x; }
nav { z-index: 100; }
nav ul { z-index: 100; height: 30px !important; background: <?php echo $orange ?>; list-style: none;}
nav ul li { display: inline; }

li.nav-item { font-family: 'Hobo'; vertical-align: top; }
li.nav-item a { margin: 4px; vertical-align: 12px; color: <?php echo $white ?> !important; }
li.nav-item a:hover { color: <?php echo $offBlack ?> !important; -webkit-transition-duration: .40s; -webkit-transition-property: color, background, box-shadow; -moz-transition-duration: .40s; -moz-transition-duration: color, background, box-shadow; transition-duration: .40s; transition-property: color, background, box-shadow; }


li#logo { width: 111px; height: 50px; }
li#logo img { z-index: 100; }

li.controls { float: right; padding: 0px 4px 0px 4px; }

li#location-wrapper { width: auto !important; }
#user-location .display-user,
#user-location .in,
#user-location .display-location { 
  font-weight: bold; 
  vertical-align: -12px; 
  color: <?php echo $white ?> !important; 
  position: absolute; 
  top: 10px; 
  overflow: hidden; 
  text-overflow: ellipsis; 
  white-space: nowrap; 
   
}
#user-location .display-user { right: 200px; width: auto;  }
#user-location .in { right: 180px; width: 20px; text-align: center;margin-left: 10px;  }
#user-location .display-location { width: 180px; right: 0px; }
#user-location input { 
  position: absolute; 
  top: 8px; 
  right: 0px; 
  width: 180px; 
  background: transparent; 
  border: none; 
  padding: 2px !important;
  font-weight: bold;
  color: <?php echo $white ?>;
  font-family: "Hobo";
  box-shadow: none !important;
}
#user-location .current-location { cursor: pointer; float: right; height: 14px; margin: 1px 1px 0 0; opacity: .75; background: url(../images/icons/geo-off.png); }
#user-location .current-location:hover { background: url(../images/icons/geo-on.png); }

li#location-wrapper span p { display: inline;  color: <?php echo $white ?> !important; }
li#location-wrapper.nav-item a { vertical-align: 0px !important; }

li#settings { display: inline-block; } 

fieldset#settings-menu { display: none; -moz-border-radius-bottomleft: 5px; -moz-border-radius-bottomright: 5px; -webkit-border-bottom-left-radius: 5px; -webkit-border-bottom-right-radius: 5px; background-color: <?php echo $white ?>; position: absolute; width: 210px; z-index: 100; border: 1px transparent; text-align: left; padding: 12px; top: 25px; right: 0px; margin-top: 5px; margin-right: 0px; color: <?php echo $offBlack ?>; font-size: 11px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; }
fieldset#settings-menu li { padding: 6px; font-size: medium; border-bottom: 1px dashed <?php echo $paleOrange ?>; text-align: center; font-family: 'Hobo';}
fieldset#settings-menu li:last-child { border-bottom: none;}

div#whats-happening { width: 300px; margin-top: 20px; margin-right: 20px; float: right; }
#whats-happening h2,
#form h2 { font-family: 'Hobo'; size: x-large; text-align: center; }

div#form { max-width: 600px; margin: 0 auto; padding: 8px; }

ul#filters { list-style: none; text-align: center; margin-top: -8px;  }
ul#filters li { display: inline-block; padding-left: 4%; padding-right: 4%; font-family: Hobo; cursor: pointer } 
ul#filters li.active { border-bottom: 2px solid <?php echo $orange ?>; padding-bottom: -14px;  }
ul#filters li:hover { color: <?php echo $orange ?>; -webkit-transition-duration: .40s; -webkit-transition-property: color, background, box-shadow; -moz-transition-duration: .40s; -moz-transition-duration: color, background, box-shadow; transition-duration: .40s; transition-property: color, background, box-shadow; }}

li.radius { display: block; padding-top: 4px; }
li.radius ul li { display: inline; padding-top: 4px; }
li.label { color: <?php echo $orange ?>; }
li.distance { }
li.custom-input-wrapper { padding-top: 0px; }
li.custom-input-wrapper input { width: 14px; display: inline; border: 1px solid <?php echo $orange ?>; }

ul#events { padding-top: 14px; }
ul#events li { font-weight: bold; padding: 4px; }
ul#events li:nth-child(even) { background: rgba(<?php echo rgba($orange, 0.1, true) ?>); }
ul#events li:hover { background: rgba(<?php echo rgba($orange, 0.3, true) ?>); }
ul#events hr { width: 90%; left: 0px; }

#map { position: absolute; top: 32px; bottom: 0; left: 0; right: 0; z-index: -100; }

.container { -moz-border-radius: 5px; border-radius: 5px; -webkit-border-radius: 5px; padding: 4px;}
.shadow { -moz-box-shadow: 3px 3px 4px <?php echo $offBlack ?>; -webkit-box-shadow: 3px 3px 4px <?php echo $offBlack ?>; box-shadow: 3px 3px 4px <?php echo $offBlack ?>; -ms-filter: "progid:DXImageTransform.Microsoft.Shadow(Strength=4, Direction=135, Color='<?php echo $offBlack ?>')"; filter: progid:DXImageTransform.Microsoft.Shadow(Strength=4, Direction=135, Color='<?php echo $offBlack ?>'); }

.wrapper { z-index: 100; filter:alpha(opacity=85); -moz-opacity: 0.85; -khtml-opacity: 0.85; opacity: 0.85; background-image: -moz-linear-gradient(top, <?php echo $white ?>, <?php echo $offWhite ?>); background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0, <?php echo $white ?>),color-stop(1, <?php echo $offWhite ?>)); filter:  progid:DXImageTransform.Microsoft.gradient(startColorStr='<?php echo $white ?>', EndColorStr='<?php echo $offWhite ?>'); -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorStr='<?php echo $white ?>', EndColorStr='<?php echo $offWhite ?>')"; }

input, textarea, select { padding: 9px; border: solid 1px <?php echo $red ?>; outline: 0; font: normal 13px/100% Verdana, Tahoma, sans-serif; width: 300px; background: <?php echo $orange ?> url('bg_form.png') left top repeat-x; background: -webkit-gradient(linear, left top, left 25, from(<?php echo $orange ?>), color-stop(4%, <?php echo $dkOrange ?>), to(<?php echo $orange ?>)); background: -moz-linear-gradient(top, <?php echo $orange ?>, <?php echo $dkOrange ?> 1px, <?php echo $orange ?> 25px); box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; -moz-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; -webkit-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px; border-radius: 5px; }
select { width: 320px !important; }
textarea { width: 300px; max-width: 400px; height: 150px; line-height: 150%; }
input:hover, textarea:hover,
input:focus, textarea:focus { border-color: <?php echo $yellow ?>; -webkit-box-shadow: rgba(0, 0, 0, 0.15) 0px 0px 8px; }
.submit input { width: auto; padding: 9px 15px; background: #617798; border: 0; font-size: 14px; color: <?php echo $orange ?>; -moz-border-radius: 5px; -webkit-border-radius: 5px 5px; }
input.input-text, select.input-text { margin-bottom: 6px; position: relative; z-index: 2; }
label { display: block; padding-left: 6px; font-family: "Hobo"; opacity: 0.75; -webkit-transition: opacity 0.15s linear; font-size : 18px; color : <?php echo $yellow ?>; font-weight : normal; line-height: 20pt; }
