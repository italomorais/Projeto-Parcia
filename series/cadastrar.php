<?php include "cabecalho.php" ?>
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
   <div class="row">
   <div class="col s6 offset-s3">
    <div class="card ">
        <div class="card-content ">
            <span class="card-title">Cadastrar Series</span>
             <!--inpunt titulo -->
            <div class="row">
            <div class="input-field col s12">
            <input  id="Titulo" type="text" class="validate "require>
            <label for="Titulo ">Titulo da serie</label>
        </div>
            </div>
          
        </div>
        <div class="row">
    <form class="col s12">
      <div class="row">
       <!--sinopse -->
        <div class="input-field col s12">
          <textarea id="sinopse" class="materialize-textarea"></textarea>
          <label for="sinopse">sinopse</label>
        </div>
      </div>
    </form>
  </div>
  <div class="row">
   <!--nota -->
            <div class="input-field col s4">
            <input  id="nota" type="number" step=".1" min=0 max=10 class="validate "require>
            <label for="nota ">Nota</label>
        </div>
            </div>
           <!--capa-->
           <div class="file-field input-field">
      <div class="btn  indigo darken-3 black-text">
        <span>Capa</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>



        <div class="card-action">
            <a class="btn waves-effect waves-light btn grey" href="galeria.php">Cancelar</a>
            <a href="#" class="waves-effect waves-light btn  indigo">Confirmar</a>
        </div>
    </div>
   </div>
   </div>
    
</body>
</html>