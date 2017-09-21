<?php

Class Html{

  public $fichiercss="<link rel='stylesheet' type='text/css' href='theme.css'>";// toujours mettre le lien complet dans la balise
  public $Balisesmeta="<meta charset='UTF-8'>";
  public $Image="<img src='Maria2.jpg' alt='Maria' height='' width=''>";
  public $Liens="<a href='https://becode.ryver.com/application/login?returnTo=https%3A%2F%2Fbecode.ryver.com%2Findex.html%23start'>";
  public $Javascript="<script='myscript.js'>";




  public function fichiercss(){
    return $this->fichiercss;
  }
  public function Balisesmeta(){
    return $this->Balisesmeta;
  }
  public function Image(){
    return $this->Image;
  }
  public function Liens(){
    return $this->Liens;
  }
  public function Javascript(){
    return $this->Javascript;
  }
  }

$Html= new Html();
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice 2</title>
</head>
<body>



<?php

  echo $Html->fichiercss();
  echo $Html->Balisesmeta();
  echo $Html->Image();
  echo $Html->Liens();
  echo $Html->Javascript();
   ?>
</body>
</html>
