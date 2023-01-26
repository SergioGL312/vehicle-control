<?php
    function generarXMLVehiculos(
    $id,
    $niv,
    $tipo,
    $marca,
    $modelo,
    $numero_serie,
    $clase,
    $tipo_combustible,
    $numero_cilindros,
    $caballos_fuerza,
    $tipo_carroceria,
    $color,
    $transmision,
    $serie_motor,
    $capacidad) {
        // Crear un nuevo objeto SimpleXML
        $xml = new SimpleXMLElement('<root/>');

        // Agregar elementos al archivo XML
        $xml->addChild('id', $id);
        $xml->addChild('niv', $niv);
        $xml->addChild('tipo', $tipo);
        $xml->addChild('marca', $marca);
        $xml->addChild('modelo', $modelo);
        $xml->addChild('numero_serie', $numero_serie);
        $xml->addChild('clase', $clase);
        $xml->addChild('tipo_combustible', $tipo_combustible);
        $xml->addChild('numero_cilindros', $numero_cilindros);
        $xml->addChild('caballos_fuerza', $caballos_fuerza);
        $xml->addChild('tipo_carroceria', $tipo_carroceria);
        $xml->addChild('color', $color);
        $xml->addChild('transmision', $transmision);
        $xml->addChild('serie_motor', $serie_motor);
        $xml->addChild('capacidad', $capacidad);

        // Convertir el objeto SimpleXML en una cadena de texto para guardar en un archivo
        $xmlString = $xml->asXML();

        // Guardar el archivo XML en el servidor
        file_put_contents('vehiculos.xml', $xmlString);

        // Cargar un archivo XML existente en un objeto SimpleXML
        $xml = simplexml_load_file('vehiculos.xml');

        // Acceder a los elementos del archivo XML
        $id = $xml->id;
        $niv = $xml->niv;
        $tipo = $xml->tipo;
        $marca = $xml->marca;
        $modelo = $xml->modelo;
        $numero_serie = $xml->numero_serie;
        $clase = $xml->clase;
        $tipo_combustible = $xml->tipo_combustible;
        $numero_cilindros = $xml->numero_cilindros;
        $caballos_fuerza = $xml->caballos_fuerza;
        $tipo_carroceria = $xml->tipo_carroceria;
        $color = $xml->color;
        $transmision = $xml->transmision;
        $serie_motor = $xml->serie_motor;
        $capacidad = $xml->capacidad;
    }

    function generarXMLTarjetas(
        $id,
        $tipo_servicio,
        $numero_constancia_inscripcion,
        $servicio,
        $origen,
        $folio,
        $fecha_vencimiento,
        $placa,
        $cve_vehicular,
        $uso,
        $operacion,
        $fecha_operacion,
        $oficina_expendidora,
        $movimiento,
        $rfa,
        $id_vehiculo,
        $id_propietario
    ){
        // Crear un nuevo objeto SimpleXML
        $xml = new SimpleXMLElement('<root/>');

        // Agregar elementos al archivo XML
        $xml->addChild('id', $id);
        $xml->addChild('tipo_servicio', $tipo_servicio);
        $xml->addChild('numero_constancia_inscripcion', $numero_constancia_inscripcion);
        $xml->addChild('servicio', $servicio);
        $xml->addChild('origen', $origen);
        $xml->addChild('folio', $folio);
        $xml->addChild('fecha_vencimiento', $fecha_vencimiento);
        $xml->addChild('placa', $placa);
        $xml->addChild('cve_vehicular', $cve_vehicular);
        $xml->addChild('uso', $uso);
        $xml->addChild('operacion', $operacion);
        $xml->addChild('fecha_operacion', $fecha_operacion);
        $xml->addChild('oficina_expendidora', $oficina_expendidora);
        $xml->addChild('movimiento', $movimiento);
        $xml->addChild('rfa', $rfa);
        $xml->addChild('id_vehiculo', $id_vehiculo);
        $xml->addChild('id_propietario', $id_propietario);

        // Convertir el objeto SimpleXML en una cadena de texto para guardar en un archivo
        $xmlString = $xml->asXML();

        // Guardar el archivo XML en el servidor
        file_put_contents('tarjetas_circulacion.xml', $xmlString);

        // Cargar un archivo XML existente en un objeto SimpleXML
        $xml = simplexml_load_file('tarjetas_circulacion.xml');

        // Acceder a los elementos del archivo XML
        $id = $xml->id;
        $tipo_servicio = $xml->tipo_servicio;
        $numero_constancia_inscripcion = $xml->numero_constancia_inscripcion;
        $servicio = $xml->servicio;
        $origen = $xml->origen;
        $folio = $xml->folio;
        $fecha_vencimiento = $xml->fecha_vencimiento;
        $placa = $xml->placa;
        $cve_vehicular = $xml->cve_vehicular;
        $uso = $xml->uso;
        $operacion = $xml->operacion;
        $fecha_operacion = $xml->fecha_operacion;
        $oficina_expendidora = $xml->oficina_expendidora;
        $movimiento = $xml->movimiento;
        $rfa = $xml->rfa;
        $id_vehiculo = $xml->id_vehiculo;
        $id_propietario = $xml->id_propietario;
    }
?>