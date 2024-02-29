<?php
echo "<center><h1>Header</h1></center>";
echo '<a href="?haha=home">HOME</a><br>';
echo  '<a href="?haha=tentang">TENTANG</a><br>';
echo '<a href="?haha=tutorial">TUTORIAL</a><br>';

$haha = $_GET["haha"];
switch($haha) {
    case 'home':
        $tampil = 'HOME';
        break;
    case 'tentang':
        $tampil = 'Tentang';
        break;
    case 'tutorial':
        $tampil = 'Tutorial';
        break;
    default:
        $tampil = "MAAF";
        break;
}
































echo $tampil;
echo "<h1>Footer</h1>";