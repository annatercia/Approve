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
</header>      
   <!-- Cria area principal de marketing de um site -->
  <div class="card">
  <br><center><img class="card-img-top" style="width:60%;" src="imgs/welcome_withoutlogo.png" alt="Imagem de capa do card">
  <div class="card-body">

       <!--center><div class=" btn btn-primary">
         <h4> SCIENTIFIC RESEARCH ACTIVE DATA MANAGEMENT PLAN: IS IT POSSIBLE TO MANAGE RESEARCH DATA DYNAMICLY? </h4>
        </div></center-->        
        <!--
        <p>The management of research data involves many issues, which go beyond basic data updates. A management plan must accompany the dynamic life cycle of a research project, therefore, a static plan does not address this need.</p>
        <p>Bearing in mind a scenario of crisis in the reproducibility of research data, this research permeates the universe of a very common problem during the data management process of scientific research projects, which involves an immeasurable amount of data and data repositories, many times not available for reuse in future research and not properly managed for different reasons.</p>
        <p>Thus, this work seeks to answer the following question: is it possible to develop a data management plan so that it evolves and becomes maintainable?
        </p>
        <br>  
        --->
        <!--p><a class="label btn-info btn-lg" role="button"><i class="fa-solid fa-star"></i> Materials and methods</a>
        <a class="label btn-warning btn-lg" role="button"><i class="fa-solid fa-star"></i> Analysis of DMP tools</a>
        <a class="label btn-success btn-lg" role="button"><i class="fa-solid fa-star"></i> Showing the variability</a></p-->
<?php       
            require_once 'conectaBD.php';

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

                
                 echo "<div class='alert alert-light' role='alert' style='float:right;'><label class='label-info' value='".$a['iduser']."' name='iduser'><i class='fa-solid fa-user'></i> User Logged:<i> ".$a['name']."</i></label> "; 
                 echo " | <label class='label label-info' value='".$a['iduser']."' name='iduser'><i class='fa-solid fa-fingerprint'></i> User ID: <i> ".$a['iduser']."</i></label></div>"; 
              $iduser = $a['iduser'];

             }

        }
        
?>
  
  <input type="hidden" name="iduser" value="<?php echo $iduser; ?>">

       
    <button type="submit" class="btn btn-primary btn-lg" role="button"><i class="fa fa-play" aria-hidden="true"></i> Start here </button>
  </div></center>
</div>
</form>
      <footer>
       <p class="text-secondary">&copy; APProve - Active Plans Provenance - PROJETO DISSERTAÇÃO 2023</p> 
      </footer>

	</body>
	
</html>