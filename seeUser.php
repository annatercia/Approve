<!DOCTYPE html><!-- doctype do HTML5 -->
<html>
	<head>
		<title>Project - Dissertation</title>
		
		<!-- Importante para habilitar os recursos de Responsividade em conjunto com o CSS -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
		<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="js/bootstrap.js"></script>
  		        
  		<link rel="stylesheet" href="css/bootstrap.css">

      <script src="https://kit.fontawesome.com/404dc3186a.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://kit.fontawesome.com/404dc3186a.css" crossorigin="anonymous">
      
	</head>
	
<body>
		
    <!-- Início da barra de navegação -->
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
            
            <!-- botao utilizado para abrir menu em dispositivos resolucao menor -->
          	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
          	</button>
            
            <!-- logo do site -->
            <a class="navbar-brand" href="#">PROJECT</a>
			
			<!-- inicio menu -->
            <div class="navbar-collapse collapse navbar-right">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <!--li><a href="#about">PGD</a></li-->
                <li><a href="seeDMP.php">DMP Comparison</a></li>
                <li><a href="VersionVariation.php">Version Variability</a></li>
              </ul>
            </div>
            <!-- fim menu -->
            
		</div>
	</div>
	<!-- Fim da barra de navegação -->
	
   <!-- Cria area principal de marketing de um site -->
    <div class="jumbotron">
      <div class="container">        
 
  <div id="top" class="row">
      
  <div class="col-sm-4">
      <h3>User Informations</h3>
       <?php 

         require_once 'conectaBD.php';

        ?>
  </div>
   
  </div> <!-- /#top -->
 
  <hr style="width: 100%; border: 1px solid; border-color: #08b; border-radius: 5px;"/>

  <div id="list" class="row">
  

  <div class="table-responsive col-md-16">
    <table class="table table-striped" cellspacing="0" cellpadding="0">
      <thead>
        <tr>
          <th class="col-md-2">ID</th>
          <th class="col-md-2">Name</th>
          <th class="col-md-2">Email</th>
          <th class="col-md-1">Verified Email</th>
          <th class="col-md-1">User Type</th>
          <th class="col-md-1">User Status</th>
          <th class="col-md-1">Creation Date </th>
          <th class="col-md-1">Last Logged In</th>
          <th class="col-md-1">Authorization Level</th>
        </tr>
      </thead>
      
      <?php

        $id = $_POST['iduser'];
 
        $buscar = ("SELECT \"id\", \"name\", \"email\", \"verified_email\", \"usertype\", \"userstatus\", \"created\", \"lastloggedin\", \"authorization_level\" FROM public.\"UserInfo\" u WHERE id=?;");
        $stmt = $pdo->prepare($buscar);
        $stmt->bindValue(1, $id, PDO::PARAM_STR);

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
                    <td><?php echo $a['email']; ?></td>
                    <td><?php if ($a['verified_email']==1){
                                echo "<i class='fa-solid fa-thumbs-up' style='color:green;'></i>";
                              }else{
                                echo "<i class='fa-solid fa-thumbs-up'></i>";
                              }; 
                        ?>            
                    </td>
                    <td><?php if ($a['usertype']==1){
                                echo "<label class='label label-info'>External</label>";
                              }else{
                                echo "<label class='label label-info'>Internal</label>";
                              }; 
                        ?> 
                    </td>
                    <td>
                      <?php if ($a['userstatus']==1){
                                echo "<label class='label label-success'>Active</label>";
                              }else{
                                echo "<label class='label label-default'>Innactive</label>";
                              }; 
                        ?> 
                    </td>
                    <td><?php echo date('d/m/Y', strtotime($a['created'])); ?></td>
                    <td><?php echo date('d/m/Y', strtotime($a['lastloggedin'])); ?></td>
                    <td>
                      <?php if ($a['authorization_level']==1){
                                echo "<label class='label label-warning'>User</label>";
                              }else{
                                echo "<label class='label label-primary'>Admin</label>";
                              }; 
                        ?> 
                    </td>
                  </tr>

                <?php } ?> <!-- //fim foreach -->

          </tbody>

          <?php } ?> <!-- fim if (!empty($buscar)){ -->

          </table>
  </div>

  </div> <!-- /#list -->
  
<hr>  

      <p><button onclick="history.back(-1)" class="btn btn-success btn-lg">&laquo; Back</button></p>
      
    </form>
     
      </div>
    </div>
        
      </div>

      <hr>

      <footer>
        <p>&copy; PROJETO DISSERTAÇÃO 2022</p>
      </footer>
    </div> <!-- /container -->

	</body>
	
</html>