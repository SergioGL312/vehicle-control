<?php
    session_start();
    if (!isset( $_SESSION['username'])) {
        header('Location: ../index.php');
    }
    $id = $_GET['id'];
    include("../database/db.php");
        $sql = "SELECT C.nombre, C.apellido_paterno, C.apellido_materno, C.domicilio, C.fecha_nacimiento, 
        C.num_emergencia, C.firma, C.donador, C.antiguedad, C.restricciones, C.grupo_sanguineo, L.tipo, L.fecha_expedicion, L.fecha_vencimiento, L.observacion         
        FROM conductores C, licencias L WHERE C.id = $id AND L.id_conductor = $id;";

        $con = conectar();
        $result = ejecutar($con, $sql);
        if (mysqli_num_rows($result) == 1 || mysqli_num_rows($result) > 1) {
			$fila = mysqli_fetch_array($result);
			$Nombre = $fila['nombre'];
            $Apellido_Paterno = $fila['apellido_paterno'];
            $Apellido_Materno = $fila['apellido_materno'];
            $Domicilio = $fila['domicilio'];
            $Fecha_Nacimiento = $fila['fecha_nacimiento'];
            $Numero_Emergencia = $fila['num_emergencia'];
            $Firma = $fila['firma'];
            $Donador = $fila['donador'];
            $Grupo_Sanguineo = $fila['grupo_sanguineo'];
            $Antiguedad = $fila['antiguedad'];
            $Tipo = $fila['tipo'];
            $Restriccion =$fila['restricciones'];
            $Fecha_Expedicion =$fila['fecha_expedicion'];
            $Fecha_Nacimiento = $fila['fecha_expedicion'];
            $Fecha_vencimiento = $fila['fecha_vencimiento'];
            $Observacion = $fila['observacion']; 
        }else{
            echo "No";
        }

require('fpdf.php');

$pdf = new FPDF($orientation='P',$unit='mm');
$pdf->AddPage();
$pdf->SetFont('Arial','B',20);    
$textypos = 5;
$pdf->setY(12);
$pdf->setX(10);
// Datos del Escudo
$pdf->Image('Escudo_queretaro.png', 50, 11,11,15,'PNG');
$pdf->setX(65);
$pdf->Cell(5,$textypos,"Estados Unidos Mexicanos");
$pdf->SetFont('Arial','B',10);    
$pdf->setY(17);$pdf->setX(65);
$pdf->Cell(7,$textypos,"Poder ejecutivo del Estado de Queretaro");
$pdf->setY(21);$pdf->setX(65);
$pdf->Cell(5,$textypos,"SECRETARIA DE SEGURIDAD CIUDADANA");


// Datos Licencia
$pdf->SetFont('Arial','B',7.5);    
$pdf->setY(55);$pdf->setX(75);
$pdf->Cell(5,$textypos,"No. de Lincencia");
$pdf->SetFont('Arial','',10);  
$pdf->SetTextColor(255,0,0);   
$pdf->setY(60);$pdf->setX(75);
$pdf->Cell(5,$textypos,$id);
$pdf->SetFont('Arial','B',10);   
$pdf->SetTextColor(0,0,0); 
$pdf->setY(65);$pdf->setX(75);
$pdf->Cell(5,$textypos,"AUTOMOVILISTA");



// Datos Conductor
$pdf->SetFont('Arial','',7.5);   
$pdf->setY(75);$pdf->setX(140);
$pdf->Cell(5,$textypos,"Nombre");
$pdf->SetFont('Arial','B',10);  
$pdf->setY(80);$pdf->setX(140);
$pdf->Cell(5,$textypos,$Apellido_Paterno);
$pdf->SetFont('Arial','B',10);  
$pdf->setY(85);$pdf->setX(140); 
$pdf->Cell(5,$textypos,$Apellido_Materno);
$pdf->SetFont('Arial','B',10);  
$pdf->setY(90);$pdf->setX(140);
$pdf->Cell(5,$textypos,$Nombre);
$pdf->SetFont('Arial','',7.5);   
$pdf->setY(95);$pdf->setX(140);
$pdf->Cell(5,$textypos,"Observaciones");
$pdf->setY(100);$pdf->setX(140);
$pdf->SetFont('Arial','B',8); 
$pdf->Cell(5,$textypos,$Observacion);




//Fechas 
$pdf->SetFont('Arial','',8);    
$pdf->setY(70);
$pdf->Cell(5,$textypos,"Fecha de Nacimientio: ");
$pdf->SetFont('Arial','',10);
$pdf->setY(75);
$pdf->Cell(5,$textypos,$Fecha_Nacimiento);


$pdf->SetFont('Arial','',8);
$pdf->setY(80);
$pdf->Cell(5,$textypos,"Fecha de Expedicion: ");
$pdf->SetFont('Arial','',10);
$pdf->setY(85);
$pdf->Cell(5,$textypos,$Fecha_Expedicion);


$pdf->SetFont('Arial','',8);
$pdf->setY(90);
$pdf->Cell(5,$textypos,"Valida hasta: ");
$pdf->SetFont('Arial','',10);
$pdf->setY(95);
$pdf->Cell(5,$textypos,$Fecha_vencimiento);


$pdf->SetFont('Arial','',8);
$pdf->setY(100);
$pdf->Cell(5,$textypos,"Antiguedad: ");
$pdf->SetFont('Arial','',10);
$pdf->setY(105);
$pdf->Cell(5,$textypos,$Antiguedad);

$pdf->SetFont('','',8);
$pdf->setY(120);$pdf->setX(80);
$pdf->Cell(5,$textypos,"AUTORIZO PARA QUE LA PRESENTE SEA");
$pdf->setY(125);$pdf->setX(77);
$pdf->Cell(5,$textypos,"RECABADA COMO GARANTIA DE INFRACCION");



$pdf->AddPage();
$pdf->SetFont('Arial','B',20);    
$textypos = 5;
$pdf->setY(12);
$pdf->setX(10);

$pdf->Image('911.png', 50, 8,20,15,'PNG');
$pdf->Image('denuncia_089.png', 140, 8,20,15,'PNG');

$pdf->SetFont('Arial','B',7.5);   
$pdf->setY(25);$pdf->setX(140);
$pdf->Cell(5,$textypos,"Domicilio");
$pdf->SetFont('Arial','',10);  
$pdf->setY(30);$pdf->setX(140);
$pdf->Cell(5,$textypos,$Domicilio);


$pdf->Image('coches.jpg', 60, 60,90,15,'JPG');

// Restricciones
$pdf->SetFont('Arial','',8);   
$pdf->setY(90);$pdf->setX(20);
$pdf->Cell(5,$textypos,"Restricciones");
$pdf->SetFont('Arial','B',11);  
$pdf->setY(95);$pdf->setX(20);
$pdf->Cell(5,$textypos,$Restriccion);

//Grupo Sanguineo
$pdf->SetFont('Arial','',8);   
$pdf->setY(90);$pdf->setX(140);
$pdf->Cell(5,$textypos,"Grupo Sanguineo");
$pdf->SetFont('Arial','B',11);  
$pdf->setY(95);$pdf->setX(140);
$pdf->Cell(5,$textypos,$Grupo_Sanguineo);


//Donador
$pdf->SetFont('Arial','',8);   
$pdf->setY(100);$pdf->setX(140);
$pdf->Cell(5,$textypos,"Donador de organos");
$pdf->SetFont('Arial','B',11);  
$pdf->setY(105);$pdf->setX(140);
$pdf->Cell(5,$textypos,$Donador);



//Numero de emergencia
$pdf->SetFont('Arial','',8);   
$pdf->setY(110);$pdf->setX(140);
$pdf->Cell(5,$textypos,"Numero de Emergencia");
$pdf->SetFont('Arial','B',11);  
$pdf->setY(115);$pdf->setX(140);
$pdf->Cell(5,$textypos,$Numero_Emergencia);






$pdf->SetFont('Arial','B',8);   
$pdf->setY(160);$pdf->setX(20);
$pdf->Cell(5,$textypos,"Fundamento Legal");
$pdf->SetFont('Arial','',7);  
$pdf->setY(165);$pdf->setX(20);
$pdf->Cell(5,$textypos,"Articulo 19 fraccion XI y 33 fraccion I de la Ley Organica del Poder Ejecutivo del Estado de Queretaro, articulo 9");
$pdf->setY(170);$pdf->setX(20);
$pdf->Cell(5,$textypos,"fraccion XI y 56 de la Ley de Transito del Estado de Queretaro, articulo 4 de la Ley de Procedimientos");
$pdf->setY(175);$pdf->setX(20);
$pdf->Cell(5,$textypos,"Administrativo del Estado de Queretaro, articulo 134, 135, 136, 137, 138, 139, 140, 141, 142 y 143 del Reglamento de");
$pdf->setY(180);$pdf->setX(20);
$pdf->Cell(5,$textypos,"Administrativo del Estado de Queretaro, articulo 134, 135, 136, 137, 138, 139, 140, 141, 142 y 143 del Reglamento de");
$pdf->setY(185);$pdf->setX(20);
$pdf->Cell(5,$textypos,"Transito de Estado de Queretaro, articulo 6, fraccion V, inciso b) y 20, fraccion V de la Ley de la Secretaria de");
$pdf->setY(190);$pdf->setX(20);
$pdf->Cell(5,$textypos,"Seguridad Ciudadana");




$pdf->Image('SSC.png', 60, 200,90,30,'PNG');

$pdf->output();