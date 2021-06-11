<?php
//ctrl shift slash pour commenter la selection
$name ='nico';
$nb=10;
$email="@gmail.com";
$boolean=true;
$tab= ["maurice","gogo",87];
$null=null; //pas de valeur dedans
//$obj={};
//pour afficher les variables:
echo "pour afficher les variables :","<br>";
var_dump($tab);
echo "<br>";
var_dump($email);
echo "<br>";
echo "mon email est ".$name.$email;
for ($i=0; $i < $nb ; $i++) { 
  # code...
  echo "<br>","lalala",  "<br>";
}

echo 'je m\'apelle $name!';
echo "je m'appelle $name!";
echo "<br>";
echo count($tab);
echo "<br>";
var_dump(count($tab));


$users =["aurelie","beatrice","camille","dannie"];
foreach ($users as $key=> $value) {
  # code...
  echo "<p>$value à la clé $key</p>";
}

