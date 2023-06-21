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
  <form method="POST" action="seeProject.php">
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
   
        <p><h2>Version Comparison Board </h2></p>

        <?php 
        /*DB Conection!*/
         require_once 'conectaBD.php'; 
        ?>
 
  <div id="top" class="row">
      
  <div class="col-sm-8">
      <h3 class="text-primary">Data Management Plan Variability</h3>
      
  </div>
  
    <div class="col-sm-4">
    </div>
    
    <form method="POST" action="seeUser.php">
    <div class="col-sm-3">
      
      <!--div class="input-group h2">
        <input name="dado" class="form-control" id="search" type="text" placeholder="Search DMP">
        <span class="input-group-btn">
          <button class="btn btn-primary" type="submit">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div-->
      
    </div>

   
  </div> <!-- /#top -->
 
  <hr style="width: 100%; border: 1px solid; border-color: #08b; border-radius: 5px;"/>

  <div id="list" class="row">
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

<p><form method="POST" action="seeUser.php">

<?php       
        
        $buscar = ("SELECT \"id\" iduser, \"name\" name FROM public.\"UserInfo\" u WHERE u.id = '1345f11e-7d15-4461-884d-b1bee77bdb19';");
        
        $retorna = array();
        $stmt = $pdo->prepare($buscar);

          if($stmt->execute()){
           $retorna=$stmt->fetchAll();
          }else { 
            echo "Sem registros!"; 
          }

        if (!empty($buscar)){

            foreach ($retorna as $a) { 

                 echo "<th class='text-info'><button class='btn bg-primary' value='".$a['iduser']."' name='iduser' style='color:white'>DMP created by <label> <i> ".$a['name']."</i></button><th>";             
             }
        }
        
?></form></p>

  <div class="table-responsive col-md-14">
    <table class="table table-striped" cellspacing="0" cellpadding="0">
      <thead>
        <tr>
          <th class="col-md-2"></th>
        </tr>
      </thead>
      
      <?php

        $iduser = $_POST['iduser'];
        $idproj = $_POST['idproj'];
 
        $buscar = ("SELECT p.\"Creator\" creator, \"ID\" idplano, \"Label\" titulo, \"Description\" descricao, \"Created\" datacriacao, \"Modified\" datamodificacao, \"Version\" versao, fk_iddmp as idplanoassoc FROM public.\"DMP\" p, public.\"UserInfo\" u WHERE u.id = '1345f11e-7d15-4461-884d-b1bee77bdb19';");
        
        $retorna = array();
        $stmt = $pdo->prepare($buscar);

        if($stmt->execute()){
           $retorna=$stmt->fetchAll();

          /* echo "<pre>";
           print_r($retorna);
           echo "</pre>";
*/
        } else { echo "Sem registros!"; }

        if (!empty($buscar)){
      ?>         

           <tbody class="table-responsive">

        <tr>
            <th>Version Number</th>

            <?php 

             foreach ($retorna as $a) { 

                if ($a['versao'] == 0){
                    echo "<th class='text-danger'>Version ".$a['versao']."</th>"; 
                }
                else if ($a['versao'] > 0){
                   echo "<th class='text-info'>Version ".$a['versao']."</th>"; 
                }
             }
        
            ?>
        </tr>
        <tr>
            <th>DMP ID</th>

            <?php

             foreach ($retorna as $a) { 

                if ($a['versao'] == 0){
                    $id1 = $a['idplano']; 
                    echo "<td>".$id1."</td>"; 
                }
                else if ($a['versao'] > 0){
                  $id2 = $a['idplano']; 
                      echo "<td>".$id2."</td>"; 
                     
                }
             }
        
            ?>
        </tr>        
            
        <tr>
            <th>Title</th>

            <?php 
            
             foreach ($retorna as $a) {              

                if ($a['versao'] == 0){
                  $titulo1 = $a['titulo'];
                  echo "<td>".$titulo1."</td>"; 
                }
                 else if ($a['versao'] > 0){
                  $titulo2 = $a['titulo']; 
                  if (strcasecmp($titulo2,$titulo1)!=0){ 
                      similar_text($titulo1, $titulo2, $percent);
                      echo "<td>".$titulo2."<br><label class='fa-1x label btn-warning'>Variability found <i class='fa-solid fa-exclamation fa-beat-fade'></i></label><br><span class='fa-1x label btn-info'>".round($percent, 1)."% similarity <i class='fa-solid fa-exclamation fa-beat-fade'></i></span></td>";
                } else { 
                      echo "<td>".$titulo2."</td>"; 
                }
                } 
             }
                
           }
           
  
            ?>
        </tr>     
        <tr>
            <th>Description</th>

            <?php 
            
             foreach ($retorna as $a) {              

                if ($a['versao'] == 0){
                  $descricao1 = $a['descricao'];
                  echo "<td><span class='more'>".$descricao1."</span></td>"; 
                }
                 else if ($a['versao'] > 0){
                  $descricao2 = $a['descricao']; 

                  if (strcasecmp($descricao2,$descricao1)!=0){ 
                      similar_text($descricao1, $descricao2, $percent);
                      echo "<td><span class='more'>".$descricao2."</span><br><label class='fa-1x label btn-warning'>Variability found <i class='fa-solid fa-exclamation fa-beat-fade'></i></label><br><span class='fa-1x label btn-info'>".round($percent, 1)."% similarity <i class='fa-solid fa-exclamation fa-beat-fade'></i></span></td>";
                } else { 
                      echo "<td>".$descricao2."</td>"; 
                }        
                } 
             }
                   
  
            ?>
        </tr>
        <tr>
            <th>Creation Date</th>

            <?php 

             foreach ($retorna as $a) { 

                if ($a['versao'] == 0){
                    echo "<td>".$a['datacriacao']."</td>"; 
                }
                else if ($a['versao'] > 0){
                   echo "<td>".$a['datacriacao']."</td>"; 
                }
             }
        
            ?>
        </tr>


        <tr>
            <th>Modified Date</th>

            <?php 

             foreach ($retorna as $a) { 

                if ($a['versao'] == 0){
                    echo "<td>".$a['datamodificacao']."</td>"; 
                }
                else if ($a['versao'] > 0){
                   echo "<td>".$a['datamodificacao']."</td>"; 
                }
             }
        
            ?>
        </tr>
        
    </tbody>
</table> 

  <hr style="width: 100%; border: 1px solid; border-color: #08b; border-radius: 5px;"/>                  

          <h2>Variability Tracking - Provenance of Versions</h2>

 <?php foreach ($retorna as $v) { ?>
                    <br><p><b>Version <?php //echo $v['versao']; ?></b>
                    <?php
                    if ($v['versao'] == 0){
                        echo "<label class='btn btn-success'>Original</label>"; 
                         $descricao1 = $v['descricao'];
                    }
                    else if ($v['versao'] > 0){
                       echo $v['versao'];
                       echo "&nbsp;<label class='btn btn-warning'>Modified</label>"; 
                        $descricao2 = $v['descricao'];
                    }
                       
                    ?> 
                    </p>

<br><label>Description:</label> <?php 
                    if (strcasecmp($descricao1,$descricao2)!=0){ 
                      $aux1= strcasecmp($descricao1,$descricao2); //variability
                      $aux2= similar_text($descricao1, $descricao2, $percent); //similarity
                        if ($v['versao']>0){
                          if($aux1>=0){
                           echo "<span class='more'>".$v['descricao']."</span><br><span class='fa-1x label btn-info'>Approximately ".round($aux1,1)."% Variability <i class='fa-solid fa-exclamation fa-beat-fade'></i></span><br><br>";
                          }else if($aux1<0){
                             $aux0= strcasecmp($descricao2,$descricao1); //variability

                              echo "<span class='more'>".$v['descricao']."</span><br><span class='fa-1x label btn-info'>Approximately ".round($aux0,1)."% Variability <i class='fa-solid fa-exclamation fa-beat-fade'></i></span><br><br>";

                          }
                        }else { 
                           echo "<br><span class='more'>".$v['descricao']."</span>"; 
                        }           
 
                } else { 
                      echo "<br><span class='more'>".$v['descricao']."</span><br>"; 
                }           
   ?>



                    <?php 
                    $buscar = ("SELECT \"id\" iduser, \"name\" name FROM public.\"UserInfo\" u WHERE u.id = '1345f11e-7d15-4461-884d-b1bee77bdb19';");
        
                         $retorna = array();
                         $stmt = $pdo->prepare($buscar);

                         if($stmt->execute()){
                            $retorna=$stmt->fetchAll();
                         }else { 
                           echo "Sem registros!"; 
                         }

                        if (!empty($buscar)){
                          foreach ($retorna as $a) { 
                            
                           } 
                        }
                    ?>
                    
                    <label>Created by <i><?php echo $a['name']; ?></i></label> in <i><?php echo date('d/m/Y', strtotime($v['datacriacao'])); ?></i><br>
                    
                    <label>Modified by <i><?php echo $a['name']; ?></i></label> in <i><?php echo date('d/m/Y', strtotime($v['datamodificacao'])); ?></i>
                    <br>

                    <form method="POST" action="export.php">
                    <a href="testejson.php" class="btn btn-primary">JSON Structure</a>

                    <a href="testeprov.xml" class="btn btn-info">Provenance Graph</a>
                    <button type="submit" class="btn btn-success"><i class="fa fa-download"></i><input type="hidden" value="<?php echo $v['idplano'];?>" name="idplano"></button>

                    </form>
                    <br><hr style="border-color: steelblue;">

<?php } ?>       

  </div>

  </div> <!-- /#list -->
  
<hr>  
  <input type="hidden" name="idproj" value="<?php echo $idproj;?>">
                        <input type="hidden" name="iduser" value="<?php echo $iduser;?>">
      
      <button onclick="history.back()" class="btn btn-success btn-lg">&laquo; Back</button>
      
    </form>
     
      </div>
    </div>
        
      </div>

      <hr>

      <footer>
        <p>&copy; APProve - Active Plans Provenance - PROJETO DISSERTAÇÃO 2023</p>
      </footer>
    </div> <!-- /container -->

  </body>
  
</html>