<!DOCTYPE html><!-- doctype do HTML5 -->

<html>
  <head>
    <title>Project - Dissertation</title>
    
    <!-- Importante para habilitar os recursos de Responsividade em conjunto com o CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="js/bootstrap.js"></script>
      <script src="https://kit.fontawesome.com/404dc3186a.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://kit.fontawesome.com/404dc3186a.css" crossorigin="anonymous">

       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <style type="text/css">
        p {
          display:none;
        }
      </style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(".btn1").click(function(){
    $("p").slideUp();
  });
  $(".btn2").click(function(){
    $("p").slideDown();
  });
});

$(document).ready(function(){
  $(".btn3").click(function(){
    $(".p1").slideUp();
  });
  $(".btn4").click(function(){
    $(".p1").slideDown();
  });
});
</script>
</head>
<body>
    <!-- Início da barra de navegação -->
    <div class="container-fluid">
      
<nav class="navbar navbar-expand-lg navbar-light bg-lightblue" >
  <a class="navbar-brand" href="index.php"><img src="imgs/4_cropped.png" style="width:38%;"></a>
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
        <br />
        <h2 class="text-primary"><i class="fa-solid fa-eye"></i> Plan [JSON]</h2>
        <p>
          
        <?php 

         require_once 'conectaBD.php';

        ?>
 
 
  <hr style="width: 100%; border: 1px solid; border-color: #08b; border-radius: 5px;"/>

  <div id="list" class="row">
   
<?php
//string json contendo os dados de um funcionário
$json_str = '{
  
    "contact" : {
      "contact_id" : {
        "identifier" : "6270355d-49f6-43d0-a3fb-7af7215d830a",
        "type" : "other",
        "additional_properties" : { }
      },
      "mbox" : "annatercia.gomes.pinheiro@gmail.com",
      "name" : "Annatercia Gomes",
      "additional_properties" : { }
    },
    "contributor" : [ {
      "contributor_id" : {
        "identifier" : "dmp:https://orcid.org/0000-0001-7806-0925",
        "type" : "other",
        "additional_properties" : { }
      },
      "name" : "Annatercia Gomes Pinheiro",
      "additional_properties" : { }
    } ],
    "cost" : [ ],
    "created" : "2021-09-22T16:16:22Z",
    "dataset" : [ {
      "data_quality_assurance" : [ ],
      "dataset_id" : {
        "identifier" : "6e95b801-1969-400a-86f6-31bb16f9acff",
        "type" : "other",
        "additional_properties" : { }
      },
      "description" : "The Virus Outbreak Data Network(VODAN) Implementation Network is one of the joint activities carried out by CODATA, RDA, WDS, and GO FAIR. The VODAN Brazil Implementation Network was established through the efforts of teams from the Oswaldo Cruz Foundation (Fiocruz), Federal University of Rio de Janeiro (UFRJ), Federal University of the State of Rio de Janeiro (UNIRIO) and S&#227;o Jos&#233; Municipal Hospital. The Vodan Brazil aims to provide an infrastructure capable of enabling health units to collect and manage medical data of patients infected with COVID-19.<br><br>We need manager the dataset and&#160;follow the evolution of data.",
      "language" : "eng",
      "metadata" : [ ],
      "title" : "VODAN BR_DATASET",
      "type" : "DMP Dataset",
      "additional_properties" : {
        "template" : "7ecc93d0-e660-46da-9d46-2798a0afde9d"
      }
    }, {
      "data_quality_assurance" : [ ],
      "dataset_id" : {
        "identifier" : "2dc37750-e433-4b71-95be-5b00407c644c",
        "type" : "other",
        "additional_properties" : { }
      },
      "description" : "The Virus Outbreak Data Network(VODAN) Implementation Network is one of the joint activities carried out by CODATA, RDA, WDS, and GO FAIR. The VODAN Brazil Implementation Network was established through the efforts of teams from the Oswaldo Cruz Foundation (Fiocruz), Federal University of Rio de Janeiro (UFRJ), Federal University of the State of Rio de Janeiro (UNIRIO) and São José Municipal Hospital. The Vodan Brazil aims to provide an infrastructure capable of enabling health units to collect and manage medical data of patients infected with COVID-19.",
      "language" : "eng",
      "metadata" : [ ],
      "title" : "VODAN BR",
      "type" : "DMP Dataset",
      "additional_properties" : {
        "template" : "7ecc93d0-e660-46da-9d46-2798a0afde9d"
      }
    } ],
    "description" : "This PGD is to manager the Virus Outbreak Data Network(VODAN) Implementation Network is one of the joint activities carried out by CODATA, RDA, WDS, and GO FAIR. The VODAN Brazil Implementation Network was established through the efforts of teams from the Oswaldo Cruz Foundation (Fiocruz), Federal University of Rio de Janeiro (UFRJ), Federal University of the State of Rio de Janeiro (UNIRIO) and S&#227;o Jos&#233; Municipal Hospital. The Vodan Brazil aims to provide an infrastructure capable of enabling health units to collect and manage medical data of patients infected with COVID-19. ",
    "dmp_id" : {
      "identifier" : "bc55a4a6-b779-45e1-a17e-487214992270",
      "type" : "other",
      "additional_properties" : { }
    },
    "ethical_issues_exist" : "unknown",
    "language" : "eng",
    "modified" : "2022-03-16T16:35:44Z",
    "project" : [ {
      "description" : "The Virus Outbreak Data Network(VODAN) Implementation Network is one of the joint activities carried out by CODATA, RDA, WDS, and GO FAIR. The VODAN Brazil Implementation Network was established through the efforts of teams from the Oswaldo Cruz Foundation (Fiocruz), Federal University of Rio de Janeiro (UFRJ), Federal University of the State of Rio de Janeiro (UNIRIO) and São José Municipal Hospital. The Vodan Brazil aims to provide an infrastructure capable of enabling health units to collect and manage medical data of patients infected with COVID-19.",
      "end" : "Wed Mar 16 16:05:55 UTC 2022",
      "funding" : [ {
        "funder_id" : {
          "identifier" : "None",
          "type" : "fundref",
          "additional_properties" : { }
        },
        "grant_id" : {
          "identifier" : "https://portal.fiocruz.br/en/vodan-brazil",
          "type" : "other",
          "additional_properties" : { }
        },
        "additional_properties" : { }
      } ],
      "start" : "Wed Mar 16 16:05:55 UTC 2022",
      "title" : "Vodan Brazil",
      "additional_properties" : { }
    } ],
    "title" : "DMPVodan Brazil0.json",
    "additional_properties" : {
      "templates" : [ "7ecc93d0-e660-46da-9d46-2798a0afde9d" ]
    }
  }';

//faz o parsing na string, gerando um objeto PHP
$obj = json_decode($json_str);

//imprime o conteúdo do objeto 
 
//echo "idade: $obj->idade<br>"; 

?> 
<br>
<div style="width:80%; text-align:justify; margin-left: 5%;">
  <button class="btn2 btn btn-primary"><?php echo $obj->title?> <i class="fa-solid fa-plus"></i></button>
  <button class="btn1 btn btn-danger"><i class="fa-solid fa-minus"></i></button> 
</div>
<div style="width:90%; text-align:justify; margin-left: 5%;">
<?php 
echo "<br><p><label class='text-danger'>DESCRIPTION:</label> $obj->description</p>"; 
echo "<p><label class='text-danger'>CREATED:</label> ".date('Y/m/d', strtotime($obj->created))."</p>"; 
echo "<p><label class='text-danger'>MODIFIED:</label> ".date('Y/m/d', strtotime($obj->modified))."</p>"; 
echo "<p><label class='text-danger'>ETHICAL ISSUES:</label> $obj->ethical_issues_exist</p>"; 
echo "<p><label class='text-danger'>LANGUAGE:</label> $obj->language</p>";
echo "<p><label class='text-danger'>:</label> $obj->language</p>";

?>

<br>

      <div style="width:80%; text-align:justify; margin-left: 5%;">
        <button class="btn4 btn btn-primary"> Contact <i class="fa-solid fa-plus"></i></button>
        <button class="btn3 btn btn-danger"><i class="fa-solid fa-minus"></i></button> 
      </div>

      <div style="width:90%; text-align:justify; margin-left: 5%;">
      <?php
      $contactobj = '{
             
            "identifier" : "6270355d-49f6-43d0-a3fb-7af7215d830a",
            "type" : "other",
            "additional_properties" : "{ }",
            "mbox" : "annatercia.gomes.pinheiro@gmail.com",
            "name" : "Annatercia Gomes",
            "additional_properties" : "{ }"
        }';

      $arr = json_decode($contactobj, true);

      echo "<br><p><label class='text-primary'>Identifier:</label> ".$arr["identifier"]."</p>"; 
      echo "<p><label class='text-primary'>Name:</label> ".$arr["name"]."</p>"; 
      echo "<p><label class='text-primary'>Type:</label> ".$arr["type"]."</p>"; 
      echo "<p><label class='text-primary'>Additional Properties:</label> ".$arr["additional_properties"]."</p>"; 
      echo "<p><label class='text-primary'>Mail box:</label> ".$arr["mbox"]."</p>"; 
      ?>
      </div>

      <div style="width:80%; text-align:justify; margin-left: 5%;">
        <button class="btn4 btn btn-primary"> Contributor <i class="fa-solid fa-plus"></i></button>
        <button class="btn3 btn btn-danger"><i class="fa-solid fa-minus"></i></button> 
      </div>

      <div style="width:90%; text-align:justify; margin-left: 5%;">

      <?php
      $contributorobj = '{ 
            "identifier":"dmp:https://orcid.org/0000-0001-7806-0925",
            "type":"other",
            "additional_properties":"{ }",
            "name":"Annatercia Gomes"
        }';

      $arr1 = json_decode($contributorobj, true);

      echo "<br><p><label class='text-primary'>Identifier:</label> ".$arr1["identifier"]."</p>"; 
      echo "<p><label class='text-primary'>Name:</label> ".$arr1["name"]."</p>"; 
      echo "<p><label class='text-primary'>Type:</label> ".$arr1["type"]."</p>"; 
      echo "<p><label class='text-primary'>Additional Properties:</label> ".$arr1["additional_properties"]."</p>"; 
      ?>

      </div>
            
      <?php

      $datasetobj = '{
            "data_quality_assurance" : "[ ]",
            "identifier":"6e95b801-1969-400a-86f6-31bb16f9acff",
            "type":"other",
            "additional_properties":"{ }",
            "description":"The Virus Outbreak Data Network(VODAN) Implementation Network is one of the joint activities carried out by CODATA, RDA, WDS, and GO FAIR. The VODAN Brazil Implementation Network was established through the efforts of teams from the Oswaldo Cruz Foundation (Fiocruz), Federal University of Rio de Janeiro (UFRJ), Federal University of the State of Rio de Janeiro (UNIRIO) and S&#227;o Jos&#233; Municipal Hospital. The Vodan Brazil aims to provide an infrastructure capable of enabling health units to collect and manage medical data of patients infected with COVID-19.<br><br>We need manager the dataset and&#160;follow the evolution of data.",
            "language":"eng",
            "metadata":"[ ]",
            "title":"VODAN BR_DATASET",
            "type2":"DMP Dataset",
            "additional_properties2":"template:7ecc93d0-e660-46da-9d46-2798a0afde9d"
          
        }';

      $arr2 = json_decode($datasetobj, true);

      ?>

       <div style="width:80%; text-align:justify; margin-left: 5%;">
        <button class="btn4 btn btn-primary">Datasets<i class="fa-solid fa-plus"></i></button>
        <button class="btn3 btn btn-danger"><i class="fa-solid fa-minus"></i></button> 
      </div>

      <div style="width:90%; text-align:justify; margin-left: 5%;">

      <div style="width:80%; text-align:justify; margin-left: 5%;">
        <p><br><button class="btn4 btn btn-primary"><?php echo "Dataset: ".$arr2["title"]; ?><i class="fa-solid fa-plus"></i></button>
        <button class="btn3 btn btn-danger"><i class="fa-solid fa-minus"></i></button></p>
      </div>

      <div style="width:90%; text-align:justify; margin-left: 5%;">

      <?php

      echo "<p><br><label class='text-primary'>Identifier:</label> ".$arr2["identifier"]."</p>"; 
      echo "<p><label class='text-primary'>Title:</label> ".$arr2["title"]."</p>"; 
      echo "<p><label class='text-primary'>Description:</label> ".$arr2["description"]."</p>"; 
      echo "<br><p><label class='text-primary'>Metadata:</label> ".$arr2["metadata"]."</p>"; 
      echo "<p><label class='text-primary'>Data Quality Assurance:</label> ".$arr2["data_quality_assurance"]."</p>"; 
      echo "<p><label class='text-primary'>Type:</label> ".$arr2["type"].", ".$arr2["type2"]."</p>"; 
      echo "<p><label class='text-primary'>Additional Properties:</label> ".$arr2["additional_properties"].", ".$arr2["additional_properties2"]."</p>"; 
      echo "<p><label class='text-primary'>Language:</label> ".$arr2["language"]."</p>"; 
      ?>
      </div>
         
      <?php

      $datasetobj2 = '{
            "data_quality_assurance" : "[ ]",
            "identifier":"2dc37750-e433-4b71-95be-5b00407c644c",
            "type":"other",
            "additional_properties":"{ }",
            "description":"The Virus Outbreak Data Network(VODAN) Implementation Network is one of the joint activities carried out by CODATA, RDA, WDS, and GO FAIR. The VODAN Brazil Implementation Network was established through the efforts of teams from the Oswaldo Cruz Foundation (Fiocruz), Federal University of Rio de Janeiro (UFRJ), Federal University of the State of Rio de Janeiro (UNIRIO) and São José Municipal Hospital. The Vodan Brazil aims to provide an infrastructure capable of enabling health units to collect and manage medical data of patients infected with COVID-19.",
            "language":"eng",
            "metadata":"[ ]",
            "title":"VODAN BR",
            "type2":"DMP Dataset",
            "additional_properties2":"template:7ecc93d0-e660-46da-9d46-2798a0afde9d"
          
        }';

      $arr3 = json_decode($datasetobj2, true);

      ?>
      <div style="width:80%; text-align:justify; margin-left: 5%;">
        <p><button class="btn4 btn btn-primary"><?php echo "Dataset: ".$arr3["title"]; ?><i class="fa-solid fa-plus"></i></button>
        <button class="btn3 btn btn-danger"><i class="fa-solid fa-minus"></i></button> </p>
      </div>

      <div style="width:90%; text-align:justify; margin-left: 5%;">

      <?php

      echo "<br><p><label class='text-primary'>Identifier:</label> ".$arr3["identifier"]."</p>"; 
      echo "<p><label class='text-primary'>Title:</label> ".$arr3["title"]."</p>"; 
      echo "<p><label class='text-primary'>Description:</label> ".$arr3["description"]."</p>"; 
      echo "<br><p><label class='text-primary'>Metadata:</label> ".$arr3["metadata"]."</p>"; 
      echo "<p><label class='text-primary'>Data Quality Assurance:</label> ".$arr3["data_quality_assurance"]."</p>"; 
      echo "<p><label class='text-primary'>Type:</label> ".$arr3["type"].", ".$arr3["type2"]."</p>"; 
      echo "<p><label class='text-primary'>Additional Properties:</label> ".$arr3["additional_properties"].", ".$arr3["additional_properties2"]."</p>"; 
      echo "<p><label class='text-primary'>Language:</label> ".$arr3["language"]."</p>"; 
      ?>
      </div>
</div>
      <div style="width:80%; text-align:justify; margin-left: 5%;">
        <button class="btn4 btn btn-info"> Project <i class="fa-solid fa-plus"></i></button>
        <button class="btn3 btn btn-danger"><i class="fa-solid fa-minus"></i></button> 
      </div>

      <div style="width:90%; text-align:justify; margin-left: 5%;">

      <?php
      $projectobj = '{ 
            "identifier":"5453ec13-23ba-4b2f-8d2e-d262be8073f2",
            "description":"The Virus Outbreak Data Network(VODAN) Implementation Network is one of the joint activities carried out by CODATA, RDA, WDS, and GO FAIR. The VODAN Brazil Implementation Network was established through the efforts of teams from the Oswaldo Cruz Foundation (Fiocruz), Federal University of Rio de Janeiro (UFRJ), Federal University of the State of Rio de Janeiro (UNIRIO) and São José Municipal Hospital. The Vodan Brazil aims to provide an infrastructure capable of enabling health units to collect and manage medical data of patients infected with COVID-19.",
            "end":"Wed Mar 16 16:05:55 UTC 2022",
            "additional_properties":"{ }",
            "start":"Wed Mar 16 16:05:55 UTC 2022",
            "title":"Vodan Brazil"

        }';
      
      $arr4 = json_decode($projectobj, true);

      echo "<p><br><label class='text-primary'>Identifier:</label> ".$arr4["identifier"]."</p>"; 
      echo "<p><label class='text-primary'>Title:</label> ".$arr4["title"]."</p>"; 
      echo "<p><label class='text-primary'>Description:</label> ".$arr4["description"]."</p>"; 
      echo "<p><label class='text-primary'>Start:</label> ".$arr4["start"]."</p>"; 
      echo "<p><label class='text-primary'>End:</label> ".$arr4["end"]."</p>"; 
      echo "<p><label class='text-primary'>Additional Properties:</label> ".$arr4["additional_properties"]."</p>"; 
      ?>

<br>
      <div style="width:80%; text-align:justify; margin-left: 5%;">
        <button class="btn4 btn btn-info">Funding <i class="fa-solid fa-plus"></i></button>
        <button class="btn3 btn btn-danger"><i class="fa-solid fa-minus"></i></button> 
      </div>

      <div style="width:90%; text-align:justify; margin-left: 5%;">

      <?php
      $funderobj = '{ 

            "identifier":"None",
            "type":"fundref",
            "additional_properties":"{ }"
            
        }';
      
      $arr5 = json_decode($funderobj, true);

      echo "<p><label class='text-primary'>Identifier:</label> ".$arr5["identifier"]."</p>"; 
      echo "<p><label class='text-primary'>Type:</label> ".$arr5["type"]."</p>";
      echo "<p><label class='text-primary'>Additional Properties:</label> ".$arr5["additional_properties"]."</p>"; 
      ?>
      </div>

<br>

     <div style="width:80%; text-align:justify; margin-left: 5%;"> 
        <button class="btn4 btn btn-info"> Grant <i class="fa-solid fa-plus"></i></button>
        <button class="btn3 btn btn-danger"><i class="fa-solid fa-minus"></i></button> 
      </div>

      <div style="width:90%; text-align:justify; margin-left: 5%;">

      <?php
      $grantobj = '{ 

          "identifier":"https://portal.fiocruz.br/en/vodan-brazil",
          "type":"other",
          "additional_properties":"{ }"

        }';
      
      $arr6 = json_decode($grantobj, true);

      echo "<p><label class='text-primary'>Identifier:</label> ".$arr6["identifier"]."</p>"; 
      echo "<p><label class='text-primary'>Type:</label> ".$arr6["type"]."</p>";
      echo "<p><label class='text-primary'>Additional Properties:</label> ".$arr6["additional_properties"]."</p>"; 
      ?>
      </div>
      </div>

</div>
      
<br> <hr> <br>


<p><i class="fa-solid fa-file fa-beat-fade"></i> <label class='label label-warning'>SEE ALL JSON FILE:</label>
<?php

//Define a large json data
$data = '{  
    "contact" : {
      "contact_id" : {
        "identifier" : "6270355d-49f6-43d0-a3fb-7af7215d830a",
        "type" : "other",
        "additional_properties" : { }
      },
      "mbox" : "annatercia.gomes.pinheiro@gmail.com",
      "name" : "Annatercia Gomes",
      "additional_properties" : { }
    },
    "contributor" : [ {
      "contributor_id" : {
        "identifier" : "dmp:https://orcid.org/0000-0001-7806-0925",
        "type" : "other",
        "additional_properties" : { }
      },
      "name" : "Annatercia Gomes Pinheiro",
      "additional_properties" : { }
    } ],
    "cost" : [ ],
    "created" : "2021-09-22T16:16:22Z",
    "dataset" : [ {
      "data_quality_assurance" : [ ],
      "dataset_id" : {
        "identifier" : "6e95b801-1969-400a-86f6-31bb16f9acff",
        "type" : "other",
        "additional_properties" : { }
      },
      "description" : "The Virus Outbreak Data Network(VODAN) Implementation Network is one of the joint activities carried out by CODATA, RDA, WDS, and GO FAIR. The VODAN Brazil Implementation Network was established through the efforts of teams from the Oswaldo Cruz Foundation (Fiocruz), Federal University of Rio de Janeiro (UFRJ), Federal University of the State of Rio de Janeiro (UNIRIO) and S&#227;o Jos&#233; Municipal Hospital. The Vodan Brazil aims to provide an infrastructure capable of enabling health units to collect and manage medical data of patients infected with COVID-19.<br><br>We need manager the dataset and&#160;follow the evolution of data.",
      "language" : "eng",
      "metadata" : [ ],
      "title" : "VODAN BR_DATASET",
      "type" : "DMP Dataset",
      "additional_properties" : {
        "template" : "7ecc93d0-e660-46da-9d46-2798a0afde9d"
      }
    }, {
      "data_quality_assurance" : [ ],
      "dataset_id" : {
        "identifier" : "2dc37750-e433-4b71-95be-5b00407c644c",
        "type" : "other",
        "additional_properties" : { }
      },
      "description" : "The Virus Outbreak Data Network(VODAN) Implementation Network is one of the joint activities carried out by CODATA, RDA, WDS, and GO FAIR. The VODAN Brazil Implementation Network was established through the efforts of teams from the Oswaldo Cruz Foundation (Fiocruz), Federal University of Rio de Janeiro (UFRJ), Federal University of the State of Rio de Janeiro (UNIRIO) and São José Municipal Hospital. The Vodan Brazil aims to provide an infrastructure capable of enabling health units to collect and manage medical data of patients infected with COVID-19.",
      "language" : "eng",
      "metadata" : [ ],
      "title" : "VODAN BR",
      "type" : "DMP Dataset",
      "additional_properties" : {
        "template" : "7ecc93d0-e660-46da-9d46-2798a0afde9d"
      }
    } ],
    "description" : "This PGD is to manager the Virus Outbreak Data Network(VODAN) Implementation Network is one of the joint activities carried out by CODATA, RDA, WDS, and GO FAIR. The VODAN Brazil Implementation Network was established through the efforts of teams from the Oswaldo Cruz Foundation (Fiocruz), Federal University of Rio de Janeiro (UFRJ), Federal University of the State of Rio de Janeiro (UNIRIO) and S&#227;o Jos&#233; Municipal Hospital. The Vodan Brazil aims to provide an infrastructure capable of enabling health units to collect and manage medical data of patients infected with COVID-19. ",
    "dmp_id" : {
      "identifier" : "bc55a4a6-b779-45e1-a17e-487214992270",
      "type" : "other",
      "additional_properties" : { }
    },
    "ethical_issues_exist" : "unknown",
    "language" : "eng",
    "modified" : "2022-03-16T16:35:44Z",
    "project" : [ {
      "description" : "The Virus Outbreak Data Network(VODAN) Implementation Network is one of the joint activities carried out by CODATA, RDA, WDS, and GO FAIR. The VODAN Brazil Implementation Network was established through the efforts of teams from the Oswaldo Cruz Foundation (Fiocruz), Federal University of Rio de Janeiro (UFRJ), Federal University of the State of Rio de Janeiro (UNIRIO) and São José Municipal Hospital. The Vodan Brazil aims to provide an infrastructure capable of enabling health units to collect and manage medical data of patients infected with COVID-19.",
      "end" : "Wed Mar 16 16:05:55 UTC 2022",
      "funding" : [ {
        "funder_id" : {
          "identifier" : "None",
          "type" : "fundref",
          "additional_properties" : { }
        },
        "grant_id" : {
          "identifier" : "https://portal.fiocruz.br/en/vodan-brazil",
          "type" : "other",
          "additional_properties" : { }
        },
        "additional_properties" : { }
      } ],
      "start" : "Wed Mar 16 16:05:55 UTC 2022",
      "title" : "Vodan Brazil",
      "additional_properties" : { }
    } ],
    "title" : "DMPVodan Brazil0.json",
    "additional_properties" : {
      "templates" : [ "7ecc93d0-e660-46da-9d46-2798a0afde9d" ]
    }
  }';
//call custom function for formatting json data
echo pretty_print($data);
//Declare the custom function for formatting
function pretty_print($json_data){
//Initialize variable for adding space
$space = 0;
$flag = false;
//Using <pre> tag to format alignment and font
echo "<pre>";
//loop for iterating the full json data
for($counter=0; $counter<strlen($json_data); $counter++)
{
//Checking ending second and third brackets
if( $json_data[$counter] == '}' || $json_data[$counter] == ']' )
    {
$space--;
echo "\n";
echo str_repeat(' ', ($space*2));
    }

//Checking for double quote(“) and comma (,)
if( $json_data[$counter] == '"'&& ($json_data[$counter-1] == ',' || $json_data[$counter-2] == ',') )
    {
echo "\n";
echo str_repeat(' ', ($space*2));
    }
if( $json_data[$counter] == '"'&& !$flag )
    {
if( $json_data[$counter-1] == ':' || $json_data[$counter-2] == ':' )
//Add formatting for question and answer
echo '<p><span style="color:blue;font-weight:bold">';
else
//Add formatting for answer options
echo '<p><span style="color:red">';
    }
echo $json_data[$counter];
//Checking conditions for adding closing span tag  
if( $json_data[$counter] == '"'&&$flag )
echo '</span>';
if( $json_data[$counter] == '"' )
$flag= !$flag;
//Checking starting second and third brackets
if( $json_data[$counter] == '{' || $json_data[$counter] == '[' )
    {
$space++;
echo "\n";
echo str_repeat(' ', ($space*2));
    }
}
echo "</pre>";
}

echo "<p>JSON STRUCTURE:";
print_r(json_decode($json_str)); 
echo "</p>";
?>
</p>  
</p></div></div>
</body>

</html>
 