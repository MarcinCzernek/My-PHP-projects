<?php
class Jaszczurka {

public $name;
public $color;
public $speed;

function __construct($n,$c,$s){
    $this->name = $n;
    $this->color = $c;
    $this->speed = $s;
}

}

$jaszczurka1 = new Jaszczurka('Marian','Green','Slow');
$jaszczurka2 = new Jaszczurka('Bazyl','Teal', 'Quick');
$jaszczurka3 = new Jaszczurka('Akadu','Yellow','Average');

$jaszczurki = [[$jaszczurka1->name,$jaszczurka2->name,$jaszczurka3->name], [$jaszczurka1->color,$jaszczurka2->color,$jaszczurka3->color],[$jaszczurka1->speed,$jaszczurka2->speed,$jaszczurka3->speed]];


function tabela(){
    global $jaszczurki;
    echo '<table>';
    for($row=0;$row<count($jaszczurki);$row++){
        echo '<tr>';
        for($col=0;$col<count($jaszczurki[$row]);$col++){
            echo '<td>'.$jaszczurki[$row][$col].'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

tabela();
echo date('t');
echo date("d");

?>