<?php

Class Validator{

  private $_string;// is_vérifie directement si C'est une chaine de caractére
  // défini variable pour que ça soit lu par tous


function __construct($syri){
  $this->_string=$syri;//parametres a tester ( variable ) construct va afficher ligne par ligne
}


  public function caract(){
    return is_string($this->_string);
  }
  public function chiffres(){
    return is_integer($this->_string);
  }
  public function decimale(){
    return is_float($this->_string);
  }
  }

$classvalidator= new Validator(5,3);

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice 2</title>
</head>
<body>



<?php

  echo "Chaine de caracteres: ".$classvalidator->caract()."<br>";
  echo "Nombre entier: ".$classvalidator->chiffres()."<br>";
  echo "Nombre à virgule: ".$classvalidator->decimale()."<br>";

   ?>
</body>
</html>
