<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
//Php classes

class Jaszczurka {

    public $name = '';

    function __construct($x)
    {
        $this->name = $x;
    }
    function getName(){
        return $this->name;
    }
    function __toString(): string
    {
       return $this->name;
    }
    function uciekaj(){
        return 'Tup tup tup';
    }

}
class Smok extends Jaszczurka{
  function ziejeOgniem(){
      echo 'Rooooooooaaaaaar!';
  }
  //nadpisuje funkcję uciekaj
  function uciekaj(){
      return 'Bam bam bam';
  }
}

$object_lizard = new Jaszczurka('Marian');
$object_dragon = new Smok('Bazyl');

echo 'Ta Jaszczurka nazywa się ' . $object_lizard->getName();

echo $object_dragon->uciekaj();
echo $object_lizard->uciekaj();



?>
<br>
<p><?php echo $object_dragon->uciekaj();
    echo $object_lizard->uciekaj();
    ?></p>
</body>
</html>
