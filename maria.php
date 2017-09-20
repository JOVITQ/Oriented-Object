<?php
/**On va creer un formulaire
 *
 */
class Form
{
  //Attributs du formulaire
  private $_debutform="<form";
  private $_finform="</form>";
  private $_input = "<input type =";



//constructeur du formulaire
  function __construct()
  {
    # code...

  }
  //Mika a commencé par les fonctions ( il l'a fait sans attributs )
  //Propriéte ou méthode du formulaire
  public function create($action="#", $method="get"){//private: toujours enlever $ et garder underscore
    return $this->_debutform. " action=". $action. " method=". $method. ">";
  }
  public function endform()
  {
    return $this->_finform;
  }
  public function text($type='',$value=''){
    return $this->_input. $type. " value=" .$value. ">";
  }
  public function checkbox($type='', $value='', $item=''){
    return $this->_input. $type. " value=" .$value. ">". $item."<br>" ;
  }
}

$maria=new Form();

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercice 1</title>
  </head>
  <body>
    <?php


    echo $maria->create();
    echo $maria->text("text","maria");
    echo $maria->text("text","miala");
    echo $maria->checkbox("radio","male", "Male");
  echo $maria->checkbox("radio", "female", "Female");
  echo $maria->checkbox("radio", "female", "other");
    echo $maria->endform();
     ?>
  </body>
</html>
