<link rel="stylesheet" href="/projeto_lp/css/css_bloco_4/style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Taviraj:ital,wght@0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

<?php 
for($i = 1; $i <= 7; $i++){
    $var = '<link rel="stylesheet" href="/projeto_lp/css/css_bloco_'.$i.'/style.css">';
    echo $var;
}
?>

<?php 
include "blocos/bloco1/bloco1.php";
include "blocos/bloco2/bloco2.php";
include "blocos/bloco3/bloco3.php";
include "blocos/bloco4/bloco4.php"; 
include "blocos/bloco5/bloco5.php"; 
include "blocos/bloco6/bloco6.php";
include "blocos/bloco7/bloco7.php";
?>


