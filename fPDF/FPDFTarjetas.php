<?php
$id = $_GET['id'];
include("../database/db.php");
        $SQL = "SELECT V.niv, V.tipo, V.marca, V.modelo, V.numero_serie, V.clase, V.tipo_combustible, V.numero_cilindros, 
        V.caballos_fuerza, V.tipo_carroceria, V.color, V.transmision, V.serie_motor, V.capacidad, T.tipo_servicio,
        T.numero_constancia_inscripcion, T.servicio, T.origen, T.folio, T.fecha_vencimiento, T.placa, T.cve_vehicular, T.uso, 
        T.fecha_operacion, T.oficina_expendidora, T.movimiento, T.rfa, P.nombre, P.apellido_paterno, 
        P.apellido_materno, P.localidad, P.municipio, P.rfc         
        FROM Vehiculos V, Tarjetas_circulacion T, Propietarios P WHERE T.id = $id AND V.id= T.id_vehiculo AND T.id_propietario = P.id;";
        $Con = Conectar();
        $Result = ejecutar($Con, $SQL);

        
        if (mysqli_num_rows($Result) == 1) {
			$fila = mysqli_fetch_array($Result);
			$Nombre = $fila['nombre'];
            $Apellido_Paterno = $fila['apellido_paterno'];
            $Apellido_Materno = $fila['apellido_materno'];
            $Localidad = $fila['localidad'];
            $Municipio = $fila['municipio'];
            $RFC = $fila['rfc'];
            $Fecha_Vencimiento = $fila['fecha_vencimiento'];
            $NIV = $fila['niv'];
            $Tipo = $fila['tipo'];
            $Marca = $fila['marca'];
            $Modelo = $fila['modelo'];
            $Numero_Serie = $fila['numero_serie'];
            $Clase = $fila['clase'];
            $Tipo_Combustible = $fila['tipo_combustible'];
            $Numero_Cilindros =$fila['numero_cilindros'];
            $Caballos_Fuerza =$fila['caballos_fuerza'];
            $Tipo_Carroceria = $fila['tipo_carroceria'];
            $Color = $fila['color'];
            $Transmision = $fila['transmision'];
            $Serie_Motor = $fila['serie_motor'];
            $Capacidad = $fila['capacidad'];
            $Tipo_Servicio = $fila['tipo_servicio'];
            $Numero_Constancia_inscripcion = $fila['numero_constancia_inscripcion'];
            $Servicio = $fila['servicio'];
            $Origen = $fila['origen'];
            $Folio = $fila['folio'];
            $Fecha_Vencimiento = $fila['fecha_vencimiento'];
            $Placa = $fila['placa'];
            $Cve_Vehicular = $fila['cve_vehicular'];
            $Uso = $fila['uso'];
            $Fecha_Operacion = $fila['fecha_operacion'];
            $Oficina_Expendidora = $fila['oficina_expendidora'];
            $Movimiento = $fila['movimiento'];
            $Rfa = $fila['rfa'];

            


 
        }else{
            echo "No";
        }

        cerrar($Con); 

require('fpdf.php');

$pdf = new FPDF($orientation='P',$unit='mm');
$pdf->AddPage('L');
$pdf->SetFont('Arial','B',20);    
$textypos = 5;
$pdf->setY(12);
$pdf->setX(10);
// Datos del Escudo
// $pdf->Image('Escudo_queretaro.png', 50, 11,11,15,'PNG');
// $pdf->setX(65);
// $pdf->Cell(5,$textypos,"Tipo de Servicio");
// $pdf->SetFont('Arial','B',10);    
// $pdf->setY(17);$pdf->setX(65);
// $pdf->Cell(7,$textypos,"Poder ejecutivo del Estado de Queretaro");
// $pdf->setY(21);$pdf->setX(65);
// $pdf->Cell(5,$textypos,"SECRETARIA DE SEGURIDAD CIUDADANA");


// Datos de Tarjeta
$pdf->SetFont('Arial','B',8);    
$pdf->setY(20);$pdf->setX(50);
$pdf->Cell(5,$textypos,"Tipo de servicio");
$pdf->SetFont('Arial','',12);    
$pdf->setY(25);$pdf->setX(50);
$pdf->Cell(5,$textypos,$Tipo_Servicio);
$pdf->SetFont('Arial','B',8);   
$pdf->setY(20);$pdf->setX(120);
$pdf->Cell(5,$textypos,"Holograma");
$pdf->SetFont('Arial','B',8);   
$pdf->setY(20);$pdf->setX(180);
$pdf->Cell(5,$textypos,"Folio");
$pdf->SetFont('Arial','B',12);   
$pdf->setY(25);$pdf->setX(180);
$pdf->Cell(5,$textypos,$Folio);
$pdf->SetFont('Arial','B',8);   
$pdf->setY(20);$pdf->setX(220);
$pdf->Cell(5,$textypos,"Vigencia");
$pdf->SetFont('Arial','B',12);   
$pdf->setY(25);$pdf->setX(220);
$pdf->SetFont('Arial','B',8);   
$pdf->setY(20);$pdf->setX(250);
$pdf->Cell(5,$textypos,"Placa");
$pdf->SetFont('Arial','B',12);   
$pdf->setY(25);$pdf->setX(250);
$pdf->Cell(5,$textypos,$Placa);


//Celdas
$pdf->setY(17.5);$pdf->setX(118);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(21.5);$pdf->setX(118);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(25.3);$pdf->setX(118);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(29);$pdf->setX(118);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(33);$pdf->setX(118);
$pdf->Cell(5,$textypos,"|");


$pdf->setY(17.5);$pdf->setX(178);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(21.5);$pdf->setX(178);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(25.3);$pdf->setX(178);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(29);$pdf->setX(178);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(33);$pdf->setX(178);
$pdf->Cell(5,$textypos,"|");



$pdf->setY(17.5);$pdf->setX(218);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(21.5);$pdf->setX(218);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(25.3);$pdf->setX(218);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(29);$pdf->setX(218);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(33);$pdf->setX(218);
$pdf->Cell(5,$textypos,"|");




$pdf->setY(17.5);$pdf->setX(248);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(21.5);$pdf->setX(248);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(25.3);$pdf->setX(248);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(29);$pdf->setX(248);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(33);$pdf->setX(248);
$pdf->Cell(5,$textypos,"|");


//Datos del Propietario
$pdf->SetFont('Arial','',12); 
$pdf->setY(33);
$pdf->Cell(5,$textypos,"_______________________________________________________________________________________________________________________");
$pdf->SetFont('Arial','B',8);    
$pdf->setY(40);$pdf->setX(50);
$pdf->Cell(5,$textypos,"Propietario");
$pdf->SetFont('Arial','',12);   
$pdf->setY(43);$pdf->setX(70);
$pdf->Cell(5,$textypos,"$Apellido_Paterno $Apellido_Materno $Nombre");
$pdf->setY(50);
$pdf->Cell(5,$textypos,"_______________________________________________________________________________________________________________________");

$pdf->SetFont('Arial','B',8);    
$pdf->setY(60);$pdf->setX(50);
$pdf->Cell(5,$textypos,"RFC");
$pdf->SetFont('Arial','',12);   
$pdf->setY(60);$pdf->setX(57);
$pdf->Cell(5,$textypos,$RFC);


$pdf->SetFont('Arial','B',8);    
$pdf->setY(60);$pdf->setX(95);
$pdf->Cell(5,$textypos,"Localidad");
$pdf->SetFont('Arial','',12);   
$pdf->setY(60);$pdf->setX(110);
$pdf->Cell(5,$textypos,$Localidad);

$pdf->SetFont('Arial','B',8);    
$pdf->setY(60);$pdf->setX(230);
$pdf->Cell(5,$textypos,"Municipio");
$pdf->SetFont('Arial','',12);   
$pdf->setY(60);$pdf->setX(250);
$pdf->Cell(5,$textypos,$Municipio);

$pdf->SetFont('Arial','B',8);    
$pdf->setY(67);$pdf->setX(50);
$pdf->Cell(5,$textypos,"Numero de serie");
$pdf->SetFont('Arial','',12);   
$pdf->setY(67);$pdf->setX(75);
$pdf->Cell(5,$textypos,$Numero_Serie);


$pdf->SetFont('Arial','B',8);    
$pdf->setY(67);$pdf->setX(108);
$pdf->Cell(5,$textypos,"Modelo");
$pdf->SetFont('Arial','',12);   
$pdf->setY(67);$pdf->setX(120);
$pdf->Cell(5,$textypos,$Modelo);


$pdf->SetFont('Arial','B',8);    
$pdf->setY(67);$pdf->setX(160);
$pdf->Cell(5,$textypos,"Operacion");
$pdf->SetFont('Arial','',12);   
$pdf->setY(67);$pdf->setX(180);
$pdf->Cell(5,$textypos,$Fecha_Operacion);


$pdf->SetFont('Arial','B',8);    
$pdf->setY(74);$pdf->setX(50);
$pdf->Cell(5,$textypos,"Marca/Linea/Sublinea");
$pdf->SetFont('Arial','',12);   
$pdf->setY(74);$pdf->setX(85);
$pdf->Cell(5,$textypos,$Marca);
$pdf->SetFont('Arial','',12);   
$pdf->setY(74);$pdf->setX(100);
$pdf->Cell(5,$textypos,"/  $Transmision");
$pdf->setY(80);
$pdf->Cell(5,$textypos,"_______________________________________________________________________________________________________________________");


$pdf->SetFont('Arial','B',8);    
$pdf->setY(90);$pdf->setX(50);
$pdf->Cell(5,$textypos,"Numero de Constancia");
$pdf->setY(95);$pdf->setX(50);
$pdf->Cell(5,$textypos,"de inscripcion (NCI)");
$pdf->SetFont('Arial','',12);   
$pdf->setY(110);$pdf->setX(50);
$pdf->Cell(5,$textypos,$Numero_Constancia_inscripcion);


//Celdas
$pdf->setY(84);$pdf->setX(100);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(87.9);$pdf->setX(100);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(91.5);$pdf->setX(100);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(95.5);$pdf->setX(100);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(99.1);$pdf->setX(100);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(103.1);$pdf->setX(100);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(106.9);$pdf->setX(100);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(110.5);$pdf->setX(100);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(114.5);$pdf->setX(100);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(118.2);$pdf->setX(100);
$pdf->Cell(5,$textypos,"|");




$pdf->setY(84);$pdf->setX(165);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(87.9);$pdf->setX(165);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(91.5);$pdf->setX(165);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(95.5);$pdf->setX(165);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(99.1);$pdf->setX(165);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(103.1);$pdf->setX(165);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(106.9);$pdf->setX(165);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(110.5);$pdf->setX(165);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(114.5);$pdf->setX(165);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(118.2);$pdf->setX(165);
$pdf->Cell(5,$textypos,"|");




$pdf->setY(84);$pdf->setX(210);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(87.9);$pdf->setX(210);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(91.5);$pdf->setX(210);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(95.5);$pdf->setX(210);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(99.1);$pdf->setX(210);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(103.1);$pdf->setX(210);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(106.9);$pdf->setX(210);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(110.5);$pdf->setX(210);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(114.5);$pdf->setX(210);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(118.2);$pdf->setX(210);
$pdf->Cell(5,$textypos,"|");
//

$pdf->SetFont('Arial','B',8);    
$pdf->setY(90);$pdf->setX(120);
$pdf->Cell(5,$textypos,"Cilindraje");
$pdf->SetFont('Arial','',12);   
$pdf->setY(90);$pdf->setX(140);
$pdf->Cell(5,$textypos,$Numero_Cilindros);


$pdf->SetFont('Arial','B',8);    
$pdf->setY(95);$pdf->setX(120);
$pdf->Cell(5,$textypos,"Capacidad");
$pdf->SetFont('Arial','',12);   
$pdf->setY(95);$pdf->setX(140);
$pdf->Cell(5,$textypos,$Capacidad);


$pdf->SetFont('Arial','B',8);    
$pdf->setY(100);$pdf->setX(120);
$pdf->Cell(5,$textypos,"Combustible");
$pdf->SetFont('Arial','',12);   
$pdf->setY(100);$pdf->setX(140);
$pdf->Cell(5,$textypos,$Tipo_Combustible);



$pdf->SetFont('Arial','B',8);    
$pdf->setY(90);$pdf->setX(170);
$pdf->Cell(5,$textypos,"Clase");
$pdf->SetFont('Arial','',12);   
$pdf->setY(90);$pdf->setX(180);
$pdf->Cell(5,$textypos,$Clase);


$pdf->SetFont('Arial','B',8);    
$pdf->setY(95);$pdf->setX(170);
$pdf->Cell(5,$textypos,"Tipo");
$pdf->SetFont('Arial','',12);   
$pdf->setY(95);$pdf->setX(180);
$pdf->Cell(5,$textypos,$Tipo);


$pdf->SetFont('Arial','B',8);    
$pdf->setY(100);$pdf->setX(170);
$pdf->Cell(5,$textypos,"Uso");
$pdf->SetFont('Arial','',12);   
$pdf->setY(100);$pdf->setX(180);
$pdf->Cell(5,$textypos,$Uso);


$pdf->SetFont('Arial','B',8);    
$pdf->setY(105);$pdf->setX(170);
$pdf->Cell(5,$textypos,"Rfa");
$pdf->SetFont('Arial','',12);   
$pdf->setY(105);$pdf->setX(180);
$pdf->Cell(5,$textypos,$Rfa);




$pdf->SetFont('Arial','B',8);    
$pdf->setY(90);$pdf->setX(220);
$pdf->Cell(5,$textypos,"Cve Vehicular");
$pdf->SetFont('Arial','',12);   
$pdf->setY(90);$pdf->setX(250);
$pdf->Cell(5,$textypos,$Cve_Vehicular);



$pdf->SetFont('Arial','B',8);    
$pdf->setY(95);$pdf->setX(220);
$pdf->Cell(5,$textypos,"Origen");
$pdf->SetFont('Arial','',12);   
$pdf->setY(95);$pdf->setX(250);
$pdf->Cell(5,$textypos,$Origen);


$pdf->SetFont('Arial','B',8);    
$pdf->setY(100);$pdf->setX(220);
$pdf->Cell(5,$textypos,"Color");
$pdf->SetFont('Arial','',12);   
$pdf->setY(100);$pdf->setX(250);
$pdf->Cell(5,$textypos,$Color);


$pdf->SetFont('Arial','B',8);    
$pdf->setY(105);$pdf->setX(220);
$pdf->Cell(5,$textypos,"Transmision");
$pdf->SetFont('Arial','',12);   
$pdf->setY(105);$pdf->setX(250);
$pdf->Cell(5,$textypos,$Transmision);

//Linea de separacion
$pdf->setY(118.5);
$pdf->Cell(5,$textypos,"_______________________________________________________________________________________________________________________");
//



$pdf->SetFont('Arial','B',8);    
$pdf->setY(130);$pdf->setX(50);
$pdf->Cell(5,$textypos,"Oficina Expendidora");
$pdf->SetFont('Arial','',12);   
$pdf->setY(135);$pdf->setX(65);
$pdf->Cell(5,$textypos,$Oficina_Expendidora);



$pdf->SetFont('Arial','B',8);    
$pdf->setY(130);$pdf->setX(100);
$pdf->Cell(5,$textypos,"Movimiento");
$pdf->SetFont('Arial','',12);   
$pdf->setY(135);$pdf->setX(100);
$pdf->Cell(5,$textypos,$Movimiento);




$pdf->SetFont('Arial','B',8);    
$pdf->setY(130);$pdf->setX(200);
$pdf->Cell(5,$textypos,"Fecha de Expedicion");
$pdf->SetFont('Arial','',12);   
$pdf->setY(135);$pdf->setX(200);
$pdf->Cell(5,$textypos,$Fecha_Operacion);


//Celdas
$pdf->setY(122.5);$pdf->setX(90);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(126.3);$pdf->setX(90);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(130);$pdf->setX(90);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(134);$pdf->setX(90);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(137.9);$pdf->setX(90);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(141.8);$pdf->setX(90);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(145.5);$pdf->setX(90);
$pdf->Cell(5,$textypos,"|");



$pdf->setY(122.5);$pdf->setX(195);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(126.3);$pdf->setX(195);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(130);$pdf->setX(195);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(134);$pdf->setX(195);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(137.9);$pdf->setX(195);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(141.8);$pdf->setX(195);
$pdf->Cell(5,$textypos,"|");
$pdf->setY(145.5);$pdf->setX(195);
$pdf->Cell(5,$textypos,"|");

//


$pdf->setY(145.5);
$pdf->Cell(5,$textypos,"_______________________________________________________________________________________________________________________");



//Imagen 

$pdf->Image('Tarjeta.png', 10, 150,282,55,'PNG');




$pdf->output();