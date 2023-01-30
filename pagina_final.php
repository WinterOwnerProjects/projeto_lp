<?php 
for($i = 1; $i <= 3; $i++){
    $var = '<link rel="stylesheet" href="/projeto_lp/css/css_bloco_'.$i.'/style.css">';
    echo $var;
}
?>
<?php 
include "blocos/bloco1/bloco1.php";
include "blocos/bloco2/bloco2.php";
include "blocos/bloco3/bloco3.php";
?>


