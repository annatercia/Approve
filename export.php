<?php 
$idplano = isset($_POST['idplano'])?$_POST['idplano']:"";

//conexão Banco de Dados
require_once'conectaBD.php';
	
//Consulta simples 

//   $iduser = $_POST['iduser'];
//   $idproj = $_POST['idproj'];
 
       		$consulta = $pdo->prepare("SELECT * FROM public.\"DMP\" p WHERE \"ID\" = '?';");
			$consulta->bindParam(1, $idplano);
			$consulta->execute();
			$array1 = $consulta->fetch();
			
			//Consulta simples edital
		/*	$query1 = $conexao->prepare("SELECT * FROM public.\"UserInfo\" u WHERE u.id = ? AND fk_idedital = idedital");
			$query1->bindParam(1, $iduser);
			$query1->execute();
			$array2 = $query1->fetch();
*/
			setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");

$data_completa = utf8_encode(strftime("%d de %B de %Y"));

      $html = "
      <html>
      <head><title>Visualização de Candidato</title></head>
      <style>
	  
	  body{
		  
	  }
	  header{
		margin-left:-10%;
		margin-top: -10%;
		padding:3% 3% 3% 3%;
		text-align:center;
		font-size:170%;
		font-weight:bolder;
		position:relative;
	  }
	  
	  h1,h2,h3{
		text-align: center;
	  }
	  h5{
	 	text-align: center;
	 	text-transform:uppercase;
	  }
	  
	  #titulo{
		text-align:center;
		font-size:200%;
		font-weight:bolder;
	  }
	  
	  #conteudo{
		text-indent:3%;
		width:100%;
		font-size:100%;
		margin-top:8%;
		
	  }
	  
	  #data{
		text-align:center;
		font-size:100%;
	  }
	  
	  #assinaturas{
		width: 80%; 
		text-align:center;
		margin-top: 10%;
	  }
	  
	form#contato label{
    display:inline-block;
    width:700px;
    font:16px Lucida;}


	form#contato label.bloco{
    display: block;
    width:50%;
    margin:center;
    height:20px;
    }
	
	p{
		margin-top: 1.8%;
		margin-bottom: 1.5%;
	}
	
	img#img{
		width:10%; 
		height:10%;
		margin-top: -10%;
		margin-left: -2%;
	}

hr.style1 {
border: 0;
height: 1px;
background: #ccc;
width: 60%;
}

hr.style2 {
border: 0;
height: 0.1%;
width: 60%;
margin-left:2%;
background: #ccc;
}
      </style>
      <body>
		<div style='background-color:#def; height:5%; padding-top:-1%;'><h5>Salve ou imprima o documento abaixo, ele será necessário para a efetivação da inscrição.</h5></div>

		<hr style='border-style: dotted;'>

		<br>
		<div id='conteudo'>
			<img src='../../../../imgs/cabecalho.png' id='img'><header'>Ficha de Inscrição</header>
			<br>
			<p><b>Edital ".$array1['title']."</b></p>
			<p>Nome: ".$array1['description']."</p>
		<br>
			
		</div>
		
		<hr style='border-style: dashed;'>

		<div id='data'>
		<h4>Recibo</h4>

			<p>Declaramos que <b>".$array1['title']."</b> confirmou sua inscrição no curso Preparatório para o ENEM “Pré-ENEM UFRRJ”, <i>campus</i>	Seropédica.</p>
			
					Seropédica, ".$data_completa.".<br>	<br>
			
			<p>______________________________________</p>
			<p>     Assinatura representante Pré-ENEM</p>

<br>
<br>
			<p>Prezado candidato fique atento às próximas etapas do processo seletivo:</p>
			
			<table style='width:100%;'>
				<tr>
					<td rowspan=\"2\" style='width:25%; text-align:center; border-style:solid; border-width:0.95%; background-color:#eef;'><b>Resultado</b></td>
					<td style='border-style:solid; border-width:4%;padding:1% 1% 1% 1%;background-color:#eef;'><b>01/03/2019</b> </td>
				</tr>
				<tr>
					<td style='border-style:solid; border-width:4%;padding:1% 1% 1% 1%;'>Divulgação na sala da Coordenação (sala 07 do P1), no site da UFRRJ e na página oficial do Facebook (Pré-Enem Ufrrj).</td>
				<tr>
			</table>
			<table style='width:100%;'>
				<tr>
					<td rowspan=\"2\" style='width:25%; text-align:center; border-style:solid; border-width:0.95%;background-color:#eef;'><b>Confirmação de matrícula </b></td>
					<td style='border-style:solid; border-width:4%;padding:1% 1% 1% 1%;background-color:#eef;'><b>11 a 15/03/2019 </b> </td>
				</tr>
				<tr>
					<td style='border-style:solid; border-width:4%;padding:1% 1% 1% 1%;'>Sala da Coordenação do Curso do Pré-ENEM, das 14h às 18:30h. </td>
				<tr>
			</table>
	 </div>
		<footer> </footer>
     </body>
     </html>";
	

	//
 
	require_once("dompdf_config.inc.php");
       
     $dompdf = new DOMPDF();
     $dompdf->load_html($html);
     $dompdf->set_paper('letter', 'portrait');
     $dompdf->render();
     $dompdf->stream(
				"Plan.pdf", /* Nome do arquivo de saída */
				array(
								"Attachment" => false /* Para download, altere para true */
				)
			);
       
?>