<?php include "cabecalho.php" ?>

<?php

$serie1= ["titulo"=>"The Flash",
"nota"=>8.5,
"sinopse" =>"Barry enfrenta diversos assassinos que invadem a premiação , 
mas os efeitos colaterais de seus novos superpoderes representam uma ameaça.",
"poster" => "https://image.tmdb.org/t/p/original/jeruqNWhqRqOR1QyqdQdHunrvU5.jpg"
];



 
$serie2= ["titulo"=>"Breaking Bad",
"nota"=>9.9,
"sinopse" =>" Ao saber que tem câncer, um professor passa a fabricar metanfetamina pelo futuro da família,
 mudando o destino de todos.",
"poster" => "https://image.tmdb.org/t/p/original/wKHImjeHwVIiWJWFIJtWUKkA5QJ.jpg"
];

$serie3= ["titulo"=>"Game of Thrones ",
"nota"=>9.3,
"sinopse" =>" Ao Em uma terra onde os verões podem durar vários anos e o inverno toda uma vida, 
sete nobres famílias lutam pelo controle da mítica terra de Westeros.",
"poster" => "https://image.tmdb.org/t/p/original/y8hfzG91BngWMHVDgivG2y9sU7C.jpg"
];

$series=[$serie1,$serie2,$serie3]



?>


<body>
<nav class="nav-extended  indigo lighten-2">
    <div class="nav-wrapper">
   
      <ul id="nav-mobile" class="right">
        <li><a href="galeria.php">galeria</a></li>
        <li><a href="cadastrar.php">cadastrar</a></li>
       
      </ul>
    
    </div>
    <div class="nav-content">
 
      <div class="nav-header center">
      <h1>Series</h1>
      <ul class="tabs tabs-transparent indigo darken-3">
        <li class="tab"><a class="active" href="#test1">Todos</a></li>
        <li class="tab"><a  href="#test2">assisitios</a></li>
        <li class="tab "><a href="#test3">favoritos</a></li>
        
      </ul>
      </dvi>
    </div>
  </nav>
 <!--cards -->
<div class="row">
  <?php foreach ($series as $serie ): ?>
    
    
    
 <div class="col s3">
<div class="card houverable">
  <div class="card-image">
    <img src="<?= $serie["poster"]?>">
    <span class="card-title">The Flash</span>
    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>

  </div>
  <div class="card-content">
 <p calss="valign-wrapper">
 <span class="card-title"><?= $serie["titulo"]?></span>
 <i class="material-icons amber-text">star</i> <?= $serie["nota"]?>

</p>
    <p><p><?= $serie["sinopse"]?></p></p>
  </div>
</div>

</div>

 <?php endforeach ?>



  
</body>
</html>