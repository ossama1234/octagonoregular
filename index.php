<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Calculo del area de un Octagono regular</title>
</head>
<body >

<div class="container mb-5">
<h4 class="py-3 mt-3"> Calcular el area de un Octagono regular</h4>
  <div class="row justify-content-center mb-5 pt-5">

  	 <div class="col">
   		 <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 			 <div class="mb-3">
 				   <label for="exampleInputEmail1" class="form-label">Medida de los lados</label>
   				 <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="medida" placeholder="Ingrese la medida"> 
  			</div>

  			<div class="mb-3">
  				  <label for="exampleInputEmail1" class="form-label">Apotema</label>
 				   <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="apotema">
 			 </div>

 			 <div class="mb-3">
  				  <label for="exampleInputEmail1" class="form-label">Nº de lados </label>
 				   <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="8 lados predefinidos" disabled="disabled">
 			 </div>



  			<button type="submit" name="btn" value="calcular" class="btn btn-primary mb-3">Calcular</button>
  			<button type="reset"  name="btn" value="Limpiar" class="btn btn-primary mb-3">Limpiar</button>
		</form>

		<?php

if (isset($_POST['btn']) && ($_POST['btn']=="calcular")){
$medida=$_POST['medida'];
$nlado=8;
$apotema= $_POST['apotema'];
$perimetro=null;
$area=null;




	if(!empty($medida) && !empty($apotema) ){
		if(is_numeric($medida) && is_numeric($apotema)){

			$perimetro=$nlado*$medida;
			$area=($perimetro*$apotema)/2;


	
			echo"<br>Perimetro del Octagono =  ".$perimetro. "m";
			echo"<br>Apotema del Octagono =  ".number_format($apotema,2). "m";
			echo"<br>Area del Octagono =  ".number_format($area,2)."m <sup> 2 </sup>";


		}else{
			echo"Los datos ingresados no son numericos, vuelva a intentarlo";

		}

	}else{

		echo "los campos de los valores no deben estar vacios, vuelva a intentarlo";
	}
}

?>
	
	</div>
 		<div class="col">
   	 	  	  <img style="width: 50%" src="apotema.png">
       </div>
	</div>
</div>





</body>
</html>

