<!DOCTYPE html><!-- doctype do HTML5 -->
<html>
    <head>
    <title>Project - Dissertation</title>
        
        <!-- Importante para habilitar os recursos de Responsividade em conjunto com o CSS -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        
        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="js/bootstrap.js"></script>
                
        <!--link rel="stylesheet" href="css/bootstrap.css"-->
      
      <script src="https://kit.fontawesome.com/404dc3186a.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://kit.fontawesome.com/404dc3186a.css" crossorigin="anonymous">

       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
      <style>
        .morecontent span {
            display: none;
        }
        .morelink {
            display: block;
        }
        td {
          text-align: justify;
        }
      </style>
  </head>
<body>
        
    <!-- Início da barra de navegação -->
    <div class="container-fluid">
        
<nav class="navbar navbar-expand-lg navbar-light bg-lightblue" >
  <a class="navbar-brand" href="index.php"><img src="imgs/4_cropped.png" style="width:20%;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar" aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="textoNavbar" style="font-size:120%">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(Página atual)</span></a>
      </li>
     <li><button type="submit" class="btn btn-link" style="font-size: 100%;" type="submit">Projects</button></li>
      <!--li><button type="submit" class="btn btn-link"  style="font-size: 100%;" type="submit">See Plans</button></li-->

       <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      </ul>
  </div>
</nav>

    </div>
    <!-- Fim da barra de navegação -->
   <!-- Cria area principal de marketing de um site -->
    <div class="jumbotron">
      <div class="container">        
 
  <div id="top" class="row">
      
  <div class="col-sm-4">
      <h3>Project Informations</h3>
       <?php 

         require_once 'conectaBD.php';

        ?>
  </div>
   
  </div> <!-- /#top -->
 
  <hr style="width: 100%; border: 1px solid; border-color: #08b; border-radius: 5px;"/>

  <div id="list" class="row" style="scroll-behavior:auto;">
  
   <script>
$(document).ready(function() {
 
    var showChar = 100;  
    var ellipsestext = "...";
    var moretext = "Show more >";
    var lesstext = "Show less";
    

    $('.more').each(function() {
        var content = $(this).html();
 
        if(content.length > showChar) {
 
            var c = content.substr(0, showChar);
            var h = content.substr(showChar, content.length - showChar);
 
            var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';
 
            $(this).html(html);
        }
 
    });
 
    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });
});
</script>


  <div class="table-responsive col-md-12">
    <table class="table table-striped" cellspacing="0" cellpadding="0">
      <thead>
        <tr>
          <th class="col-md-1">ID</th>
          <th class="col-md-1">Name</th>
          <th class="col-md-1">Abbreviation</th>
          <th class="col-md-3">Description</th>
          <th class="col-md-1">Created</th>
          <th class="col-md-1">Modified</th>
          <th class="col-md-1">Start</th>
          <th class="col-md-1">End</th>
          <th class="col-md-1">Plans</th>
          <th class="col-md-1">Researchers</th>
          <!--th class="col-md-1">Creator</th-->   
        </tr>
      </thead>
      
      <?php
        $iduser = $_POST['iduser'];
        $buscar = ("SELECT \"ID\" id, \"Label\" name, \"Abbreviation\" abrev, \"Description\" descricao, \"Created\" criacao, \"Modified\" modificacao, \"StartDate\" inicio, \"EndDate\" fim FROM public.\"Project\" WHERE \"CreationUser\" = ?;");
        $stmt = $pdo->prepare($buscar);
        $stmt->bindValue(1, $iduser, PDO::PARAM_STR);

        if($stmt->execute()){
           $retorna=$stmt->fetchAll();

          /* echo "<pre>";
           print_r($retorna);
           echo "</pre>";
*/
        } else { echo "Sem registros!"; }

        if (!empty($buscar)){
      ?>         

           <tbody>
               <?php foreach ($retorna as $a) { ?>
                  
                  <tr>
                    <th scope="row"><?php echo $a['id']; ?></th>
                    <td><?php echo $a['name']; ?></td>
                    <td><?php echo $a['abrev']; ?></td>
                    <td><?php echo "<span class='more'>".$a['descricao']."</span>"; ?></td>
                    <td><?php echo $a['criacao']; ?></td>
                    <td><?php echo $a['modificacao']; ?></td>
                    <td><?php echo $a['inicio']; ?></td>
                    <td><?php echo $a['fim']; ?></td>
                    <td><form method="POST" action="seeDMP.php">
                        <input type="hidden" name="idproj" value="<?php echo $a['id']; ?>">
                        <input type="hidden" name="iduser" value="<?php echo $iduser; ?>">
                        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-file"></i></label></button></form></td>
                    <td><form method="POST" action="seeResearchers.php">
            <button type="submit" class="btn btn-info"><i class="fa-solid fa-users-between-lines"></i></label></button>
    </form></td>
                    <!--td><?php 

                            echo "criador"; 

                        ?></td-->
                  </tr>

                <?php } ?> <!-- //fim foreach -->

          </tbody>

          <?php } ?> <!-- fim if (!empty($buscar)){ -->

          </table>
  </div>
       
  </div> <!-- /#list -->
  
<hr>  

      <p><button onclick="history.back(-1)" class="btn btn-success btn-lg">&laquo; Back</button></p>
      
 
     </div>
 </div>
	</body>
	
      <footer>
       <p class="text-secondary">&copy; APProve - Active Plans Provenance - PROJETO DISSERTAÇÃO 2023</p> 
      </footer>

</html>