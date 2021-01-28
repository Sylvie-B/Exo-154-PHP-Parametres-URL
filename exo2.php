<?php

// si iteration n'existe pas retour à index
if(!isset($_GET['iteration'])){
    header('location: index.php?error=1');
}

// recup de la valeur du param
$ite=$_GET['iteration'];

// affecte une valeur max ou min au param
if($ite > 100){
    $ite = 100;
}
elseif ($ite <=0){
    $ite=1;
}

// utilise le param
for($i=0; $i < $ite; $i++){
    echo "<div><a href='coucou.php?iteration=$i'>mon lien $i</a></div>";
}

