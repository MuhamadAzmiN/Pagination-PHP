<?php
echo "<center><h1>Header</h1></center>";
echo '<a href="?page=home">Home</a><br>';
echo  '<a href="?page=tentang">tentang</a><br>';
echo '<a href="?page=tutorial">tutorial</a><br>';

$page = $_GET["page"];
switch($page) {
    case 'home':
        include 'home.php';
        break;
    case 'tentang':
        include 'tentang.php';
        break;
    case 'tutorial':
        include "tutorial.php";
        break;
    default:
        echo "maaf halaman tidak di temukan";
        break;
}