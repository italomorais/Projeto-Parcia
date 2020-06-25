<?php
$bd = new SQLite3("series.db")
$sql = "DROP TABLE IF EXISTS series";
if(($bd->exec($sql))
echo"\ntabela series apagada\n"

$sql = "CREATE TABLE series (
    
    id INTEGER PRIMARY KEY AUTOINCREMENT, 
    titulo VARCHAR(200) NOT FULL,
    poster ARCHAR(200),
    sinopse TEXT,
    nota DECIMAL(2,1)
    )
    ";

    


     $sql = "INSERT INTO series (id,titulo,poster,sinopse,nota) VALUES(
         0,
         'The Flash'
         'https://image.tmdb.org/t/p/original/jeruqNWhqRqOR1QyqdQdHunrvU5.jpg'
         'Barry enfrenta diversos assassinos que invadem a premiação , 
mas os efeitos colaterais de seus novos superpoderes representam uma ameaça.'
   8.5
     )";

if(($bd->exec($sql))
echo"\ntabela series criadaz\n"

$sql= "SELECET * FROM series";
$rs= bd->query($sql) ;

while ($serie=$rs->fetchArray{}){
 print_r($serie)

}




     

     
     
     



?>