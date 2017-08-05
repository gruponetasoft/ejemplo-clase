<!DOCTYPE html> <html lang="en">
<head>   <title>Mi Proyecto</title>
<meta charset="utf-8">  
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link href="vistas/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<script src="vistas/bootstrap/js/bootstrap.min.js"></script> 
</head>
<body> 
<div class="container"> 
 
<header>

<?php include_once'vistas/html/header.php'; ?>
 
 </header> 
 

 
<h1><center><?php echo 'PROYECTO TRIMESTRE PHP' ?></center></h1>   
<p><center>BOOTSTRAP - SQL.</center></p>  </div>

<div class="container"> <!--�contenedor para el men� lateral y contenido central -->      
<div class="row"> <!-- fila para contenido-->         

<?php include_once'vistas/html/menulateral.php'; ?>

<div class="col-sm-10 col-md-10"> <!--�Columna de 10 espacios para contenido central e im�genes -->           
<div class="panel panel-default">            
<div class="panel-heading">               
<h3 class="panel-title">EJERCICIOS DE PRACTICA PHP</h3>             
</div>             
<div class="panel-body">               
<p>Aplicacion de ejercicios de uso de Variables, estructuras condicionales, repetitivas con lenguaje PHP combinando con Bootstrap </p>               
<div class="alert alert-success">              
<div class="row">         
<div class="col-md-3" align="center"> <span><img src="vistas/imagenes/css.png" width="100" width="100"></span></div>         
<div class="col-md-3" align="center"> <span><img src="vistas/imagenes/html.png" width="100" width="100"></span></div>         
<div class="col-md-3" align="center"> <span><img src="vistas/imagenes/php.png" width="130" width="130"></span></div>          
<div class="col-md-3" align="center"> <span><img src="vistas/imagenes/sql.png" width="110" width="110"></span></div> 
</div>      
</div>  
</div>  
</div>  
</div>  
</div>

      
 
</body> 
</html>
