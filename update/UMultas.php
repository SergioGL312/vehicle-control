<?php
    session_start();
    if (!isset( $_SESSION['username'])) {
        header('Location: ../index.php');
    }
    if ($_SESSION['rol'] == 'U') {
        header('Location: ../menu.php');
    }
    include("../database/db.php");

    if (isset($_GET['folio'])) {
        $folio = $_GET['folio'];
        $query = "SELECT * FROM multas WHERE folio = '$folio';";

        $con = conectar();
        $result = ejecutar($con, $query);
        if (mysqli_num_rows($result) == 1) {
            $fila = mysqli_fetch_array($result);
            $folio = $fila['folio'];
            $dia = $fila['dia'];
            $mes = $fila['mes'];
            $anio = $fila['anio'];
            $hora = $fila['hora'];
            $reporte_seccion = $fila['reporte_seccion'];
            $nombre_via = $fila['nombre_via'];
            $kilometro = $fila['kilometro'];
            $direccion_sentido = $fila['direccion_sentido'];
            $municipio = $fila['municipio'];
            $referencia_lugar = $fila['referencia_lugar'];
            $articulo_fundamento = $fila['articulo_fundamento'];
            $motivo = $fila['motivo'];
            $garantia_retenida = $fila['garantia_retenida'];
            $convenio = $fila['convenio'];
            $puesto_a_disposicion = $fila['puesto_a_disposicion'];
            $calificacion_boleta = $fila['calificacion_boleta'];
            $deposito_oficial = $fila['deposito_oficial'];
            $observaciones_personal_operativo = $fila['observaciones_personal_operativo'];
            $observaciones_conductor = $fila['observaciones_conductor'];
            $numero_parte_accidente = $fila['numero_parte_accidente'];
            $id_personal_operativo = $fila['id_personal_operativo'];
            $id_tarjeta_circulacion = $fila['id_tarjeta_circulacion'];
            $id_licencia = $fila['id_licencia'];
            $id_vehiculo = $fila['id_vehiculo'];
        }
    }

    if (isset($_POST['update'])) {
        $dia = $_POST['dia'];
        $mes = $_POST['mes'];
        $anio = $_POST['anio'];
        $hora = $_POST['hora'];
        $reporte_seccion = $_POST['reporte_seccion'];
        $nombre_via = $_POST['nombre_via'];
        $kilometro = $_POST['kilometro'];
        $direccion_sentido = $_POST['direccion_sentido'];
        $municipio = $_POST['municipio'];
        $referencia_lugar = $_POST['referencia_lugar'];
        $articulo_fundamento = $_POST['articulo_fundamento'];
        $motivo = $_POST['motivo'];
        $garantia_retenida = $_POST['garantia_retenida'];
        $convenio = $_POST['convenio'];
        $puesto_a_disposicion = $_POST['puesto_a_disposicion'];
        $calificacion_boleta = $_POST['calificacion_boleta'];
        $deposito_oficial = $_POST['deposito_oficial'];
        $observaciones_personal_operativo = $_POST['observaciones_personal_operativo'];
        $observaciones_conductor = $_POST['observaciones_conductor'];
        $numero_parte_accidente = $_POST['numero_parte_accidente'];

        $query = "UPDATE multas SET
        dia = '$dia',
        mes = '$mes',
        anio = '$anio',
        hora = '$hora',
        reporte_seccion = '$reporte_seccion',
        nombre_via = '$nombre_via',
        kilometro = '$kilometro',
        direccion_sentido = '$direccion_sentido',
        municipio = '$municipio',
        referencia_lugar = '$referencia_lugar',
        articulo_fundamento = '$articulo_fundamento',
        motivo = '$motivo',
        garantia_retenida = '$garantia_retenida',
        convenio = '$convenio',
        puesto_a_disposicion = '$puesto_a_disposicion',
        calificacion_boleta = '$calificacion_boleta',
        deposito_oficial = '$deposito_oficial',
        observaciones_personal_operativo = '$observaciones_personal_operativo',
        observaciones_conductor = '$observaciones_conductor',
        numero_parte_accidente = '$numero_parte_accidente'
        
        WHERE folio = '$folio';";
        $result = ejecutar($con, $query);
        if (mysqli_affected_rows($con) == 1) { 
            echo "<script>alert('Multa Actualizada');</script>";
			echo "<script>location.assign(\"../select/SMultas.php\")</script>";
        }
        cerrar($con);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <title>Select Multas</title>
</head>
<body>
<header class="p-3" style="background: #1f1f1f;">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-white" style="font-size: 30px;">Actualizar Multas</a>
                    </li>
                </ul>
                <div class="text-end">
                    <button type="button" class="btn btn-danger" id="back-home"
                        style="width: 80px; padding-left: 10px;">Regresar</button>
                </div>
            </div>
        </div>
    </header>

    <div class="p-5 m-0 border-0">
        <form class="row g-3" method="POST" action="UMultas.php?folio=<?php echo $_GET['folio']; ?>">
            <div class="form-label">
                <label class="form-label">folio</label>
                <input type="text" id="folio" name="folio" maxlength="20" disabled value="<?php echo $folio; ?>" disabled>
            </div>
            <div class="col-md-2">
                <div class="controls">
                    <label class="form-label">dia</label>
                </div>
                <select class="form-select border border-2" name="dia" id="dia">
                    <option value="1" <?php if ($dia == "1") echo "selected"; ?>>1</option>
                    <option value="2" <?php if ($dia == "2") echo "selected"; ?>>2</option>
                    <option value="3" <?php if ($dia == "3") echo "selected"; ?>>3</option>
                    <option value="4" <?php if ($dia == "4") echo "selected"; ?>>4</option>
                    <option value="5" <?php if ($dia == "5") echo "selected"; ?>>5</option>
                    <option value="6" <?php if ($dia == "6") echo "selected"; ?>>6</option>
                    <option value="7" <?php if ($dia == "7") echo "selected"; ?>>7</option>
                    <option value="8" <?php if ($dia == "8") echo "selected"; ?>>8</option>
                    <option value="9" <?php if ($dia == "9") echo "selected"; ?>>9</option>
                    <option value="10" <?php if ($dia == "10") echo "selected"; ?>>10</option>
                    <option value="11" <?php if ($dia == "11") echo "selected"; ?>>11</option>
                    <option value="12" <?php if ($dia == "12") echo "selected"; ?>>12</option>
                    <option value="13" <?php if ($dia == "13") echo "selected"; ?>>13</option>
                    <option value="14" <?php if ($dia == "14") echo "selected"; ?>>14</option>
                    <option value="15" <?php if ($dia == "15") echo "selected"; ?>>15</option>
                    <option value="16" <?php if ($dia == "16") echo "selected"; ?>>16</option>
                    <option value="17" <?php if ($dia == "17") echo "selected"; ?>>17</option>
                    <option value="18" <?php if ($dia == "18") echo "selected"; ?>>18</option>
                    <option value="19" <?php if ($dia == "19") echo "selected"; ?>>19</option>
                    <option value="20" <?php if ($dia == "20") echo "selected"; ?>>20</option>
                    <option value="21" <?php if ($dia == "21") echo "selected"; ?>>21</option>
                    <option value="22" <?php if ($dia == "22") echo "selected"; ?>>22</option>
                    <option value="23" <?php if ($dia == "23") echo "selected"; ?>>23</option>
                    <option value="24" <?php if ($dia == "24") echo "selected"; ?>>24</option>
                    <option value="25" <?php if ($dia == "25") echo "selected"; ?>>25</option>
                    <option value="26" <?php if ($dia == "26") echo "selected"; ?>>26</option>
                    <option value="27" <?php if ($dia == "27") echo "selected"; ?>>27</option>
                    <option value="28" <?php if ($dia == "28") echo "selected"; ?>>28</option>
                    <option value="29" <?php if ($dia == "29") echo "selected"; ?>>29</option>
                    <option value="30" <?php if ($dia == "30") echo "selected"; ?>>30</option>
                    <option value="31" <?php if ($dia == "31") echo "selected"; ?>>31</option>
                </select>
            </div> 
            <div class="col-md-2">
                <div class="controls">
                    <label class="form-label">mes</label>
                </div>
                <select class="form-select border border-2" name="mes" id="mes">
                    <option value="Enero" <?php if ($mes == "Enero") echo "selected"; ?>>Enero</option>
                    <option value="Febrero" <?php if ($mes == "Febrero") echo "selected"; ?>>Febrero</option>
                    <option value="Marzo" <?php if ($mes == "Marzo") echo "selected"; ?>>Marzo</option>
                    <option value="Abril" <?php if ($mes == "Abril") echo "selected"; ?>>Abril</option>
                    <option value="Mayo" <?php if ($mes == "Mayo") echo "selected"; ?>>Mayo</option>
                    <option value="Junio" <?php if ($mes == "Junio") echo "selected"; ?>>Junio</option>
                    <option value="Julio" <?php if ($mes == "Julio") echo "selected"; ?>>Julio</option>
                    <option value="Agosto" <?php if ($mes == "Agosto") echo "selected"; ?>>Agosto</option>
                    <option value="Septiembre" <?php if ($mes == "Septiembre") echo "selected"; ?>>Septiembre</option>
                    <option value="Octubre" <?php if ($mes == "Octubre") echo "selected"; ?>>Octubre</option>
                    <option value="Noviembre" <?php if ($mes == "Noviembre") echo "selected"; ?>>Noviembre</option>
                    <option value="Diciembre" <?php if ($mes == "Diciembre") echo "selected"; ?>>Diciembre</option>
                </select>
            </div>
            
            <div class="col-md-2">
                <div class="controls">
                    <label class="form-label">año</label>
                </div>
                <select class="form-select border border-2" name="anio" id="anio">
                    <option value="1922" <?php if ($anio == "1922") echo "selected"; ?>>1922</option>
                    <option value="1923" <?php if ($anio == "1923") echo "selected"; ?>>1923</option>
                    <option value="1924" <?php if ($anio == "1924") echo "selected"; ?>>1924</option>
                    <option value="1925" <?php if ($anio == "1925") echo "selected"; ?>>1925</option>
                    <option value="1926" <?php if ($anio == "1926") echo "selected"; ?>>1926</option>
                    <option value="1927" <?php if ($anio == "1927") echo "selected"; ?>>1927</option>
                    <option value="1928" <?php if ($anio == "1928") echo "selected"; ?>>1928</option>
                    <option value="1929" <?php if ($anio == "1929") echo "selected"; ?>>1929</option>
                    <option value="1930" <?php if ($anio == "1930") echo "selected"; ?>>1930</option>
                    <option value="1931" <?php if ($anio == "1931") echo "selected"; ?>>1931</option>
                    <option value="1932" <?php if ($anio == "1932") echo "selected"; ?>>1932</option>
                    <option value="1933" <?php if ($anio == "1933") echo "selected"; ?>>1933</option>
                    <option value="1934" <?php if ($anio == "1934") echo "selected"; ?>>1934</option>
                    <option value="1935" <?php if ($anio == "1935") echo "selected"; ?>>1935</option>
                    <option value="1936" <?php if ($anio == "1936") echo "selected"; ?>>1936</option>
                    <option value="1937" <?php if ($anio == "1937") echo "selected"; ?>>1937</option>
                    <option value="1938" <?php if ($anio == "1938") echo "selected"; ?>>1938</option>
                    <option value="1939" <?php if ($anio == "1939") echo "selected"; ?>>1939</option>
                    <option value="1940" <?php if ($anio == "1940") echo "selected"; ?>>1940</option>
                    <option value="1941" <?php if ($anio == "1941") echo "selected"; ?>>1941</option>
                    <option value="1942" <?php if ($anio == "1942") echo "selected"; ?>>1942</option>
                    <option value="1943" <?php if ($anio == "1943") echo "selected"; ?>>1943</option>
                    <option value="1944" <?php if ($anio == "1944") echo "selected"; ?>>1944</option>
                    <option value="1945" <?php if ($anio == "1945") echo "selected"; ?>>1945</option>
                    <option value="1946" <?php if ($anio == "1946") echo "selected"; ?>>1946</option>
                    <option value="1947" <?php if ($anio == "1947") echo "selected"; ?>>1947</option>
                    <option value="1948" <?php if ($anio == "1948") echo "selected"; ?>>1948</option>
                    <option value="1949" <?php if ($anio == "1949") echo "selected"; ?>>1949</option>
                    <option value="1950" <?php if ($anio == "1950") echo "selected"; ?>>1950</option>
                    <option value="1951" <?php if ($anio == "1951") echo "selected"; ?>>1951</option>
                    <option value="1952" <?php if ($anio == "1952") echo "selected"; ?>>1952</option>
                    <option value="1953" <?php if ($anio == "1953") echo "selected"; ?>>1953</option>
                    <option value="1954" <?php if ($anio == "1954") echo "selected"; ?>>1954</option>
                    <option value="1955" <?php if ($anio == "1955") echo "selected"; ?>>1955</option>
                    <option value="1956" <?php if ($anio == "1956") echo "selected"; ?>>1956</option>
                    <option value="1957" <?php if ($anio == "1957") echo "selected"; ?>>1957</option>
                    <option value="1958" <?php if ($anio == "1958") echo "selected"; ?>>1958</option>
                    <option value="1959" <?php if ($anio == "1959") echo "selected"; ?>>1959</option>
                    <option value="1960" <?php if ($anio == "1960") echo "selected"; ?>>1960</option>
                    <option value="1961" <?php if ($anio == "1961") echo "selected"; ?>>1961</option>
                    <option value="1962" <?php if ($anio == "1962") echo "selected"; ?>>1962</option>
                    <option value="1963" <?php if ($anio == "1963") echo "selected"; ?>>1963</option>
                    <option value="1964" <?php if ($anio == "1964") echo "selected"; ?>>1964</option>
                    <option value="1965" <?php if ($anio == "1965") echo "selected"; ?>>1965</option>
                    <option value="1966" <?php if ($anio == "1966") echo "selected"; ?>>1966</option>
                    <option value="1967" <?php if ($anio == "1967") echo "selected"; ?>>1967</option>
                    <option value="1968" <?php if ($anio == "1968") echo "selected"; ?>>1968</option>
                    <option value="1969" <?php if ($anio == "1969") echo "selected"; ?>>1969</option>
                    <option value="1970" <?php if ($anio == "1970") echo "selected"; ?>>1970</option>
                    <option value="1971" <?php if ($anio == "1971") echo "selected"; ?>>1971</option>
                    <option value="1972" <?php if ($anio == "1972") echo "selected"; ?>>1972</option>
                    <option value="1973" <?php if ($anio == "1973") echo "selected"; ?>>1973</option>
                    <option value="1974" <?php if ($anio == "1974") echo "selected"; ?>>1974</option>
                    <option value="1975" <?php if ($anio == "1975") echo "selected"; ?>>1975</option>
                    <option value="1976" <?php if ($anio == "1976") echo "selected"; ?>>1976</option>
                    <option value="1977" <?php if ($anio == "1977") echo "selected"; ?>>1977</option>
                    <option value="1978" <?php if ($anio == "1978") echo "selected"; ?>>1978</option>
                    <option value="1979" <?php if ($anio == "1979") echo "selected"; ?>>1979</option>
                    <option value="1980" <?php if ($anio == "1980") echo "selected"; ?>>1980</option>
                    <option value="1981" <?php if ($anio == "1981") echo "selected"; ?>>1981</option>
                    <option value="1982" <?php if ($anio == "1982") echo "selected"; ?>>1982</option>
                    <option value="1983" <?php if ($anio == "1983") echo "selected"; ?>>1983</option>
                    <option value="1984" <?php if ($anio == "1984") echo "selected"; ?>>1984</option>
                    <option value="1985" <?php if ($anio == "1985") echo "selected"; ?>>1985</option>
                    <option value="1986" <?php if ($anio == "1986") echo "selected"; ?>>1986</option>
                    <option value="1987" <?php if ($anio == "1987") echo "selected"; ?>>1987</option>
                    <option value="1988" <?php if ($anio == "1988") echo "selected"; ?>>1988</option>
                    <option value="1989" <?php if ($anio == "1989") echo "selected"; ?>>1989</option>
                    <option value="1990" <?php if ($anio == "1990") echo "selected"; ?>>1990</option>
                    <option value="1991" <?php if ($anio == "1991") echo "selected"; ?>>1991</option>
                    <option value="1992" <?php if ($anio == "1992") echo "selected"; ?>>1992</option>
                    <option value="1993" <?php if ($anio == "1993") echo "selected"; ?>>1993</option>
                    <option value="1994" <?php if ($anio == "1994") echo "selected"; ?>>1994</option>
                    <option value="1995" <?php if ($anio == "1995") echo "selected"; ?>>1995</option>
                    <option value="1996" <?php if ($anio == "1996") echo "selected"; ?>>1996</option>
                    <option value="1997" <?php if ($anio == "1997") echo "selected"; ?>>1997</option>
                    <option value="1998" <?php if ($anio == "1998") echo "selected"; ?>>1998</option>
                    <option value="1999" <?php if ($anio == "1999") echo "selected"; ?>>1999</option>
                    <option value="2000" <?php if ($anio == "2000") echo "selected"; ?>>2000</option>
                    <option value="2001" <?php if ($anio == "2001") echo "selected"; ?>>2001</option>
                    <option value="2002" <?php if ($anio == "2002") echo "selected"; ?>>2002</option>
                    <option value="2003" <?php if ($anio == "2003") echo "selected"; ?>>2003</option>
                    <option value="2004" <?php if ($anio == "2004") echo "selected"; ?>>2004</option>
                    <option value="2005" <?php if ($anio == "2005") echo "selected"; ?>>2005</option>
                    <option value="2006" <?php if ($anio == "2006") echo "selected"; ?>>2006</option>
                    <option value="2007" <?php if ($anio == "2007") echo "selected"; ?>>2007</option>
                    <option value="2008" <?php if ($anio == "2008") echo "selected"; ?>>2008</option>
                    <option value="2009" <?php if ($anio == "2009") echo "selected"; ?>>2009</option>
                    <option value="2010" <?php if ($anio == "2010") echo "selected"; ?>>2010</option>
                    <option value="2011" <?php if ($anio == "2011") echo "selected"; ?>>2011</option>
                    <option value="2012" <?php if ($anio == "2012") echo "selected"; ?>>2012</option>
                    <option value="2013" <?php if ($anio == "2013") echo "selected"; ?>>2013</option>
                    <option value="2014" <?php if ($anio == "2014") echo "selected"; ?>>2014</option>
                    <option value="2015" <?php if ($anio == "2015") echo "selected"; ?>>2015</option>
                    <option value="2016" <?php if ($anio == "2016") echo "selected"; ?>>2016</option>
                    <option value="2017" <?php if ($anio == "2017") echo "selected"; ?>>2017</option>
                    <option value="2018" <?php if ($anio == "2018") echo "selected"; ?>>2018</option>
                    <option value="2019" <?php if ($anio == "2019") echo "selected"; ?>>2019</option>
                    <option value="2020" <?php if ($anio == "2020") echo "selected"; ?>>2020</option>
                    <option value="2021" <?php if ($anio == "2021") echo "selected"; ?>>2021</option>
                    <option value="2022" <?php if ($anio == "2022") echo "selected"; ?>>2022</option>
                </select>
            </div>
            <div class="col-md-2">
                <label class="form-label">hora</label>
                <input class="form-control border border-2" type="time" id="hora" name="hora" value="<?php echo $hora; ?>">
            </div>

            <div class="col-md-2">
                <label class="form-label">reporte_seccion</label>
                <input class="form-control border border-2" type="text" id="reporte_seccion" name="reporte_seccion" minlength="5" maxlength="30" value="<?php echo $reporte_seccion; ?>">
            </div>
            
            <div class="col-md-3">
                <label class="form-label">nombre_via</label>
                <input class="form-control border border-2" type="text" id="nombre_via" name="nombre_via" minlength="5" maxlength="50" value="<?php echo $nombre_via; ?>">
            </div>
            <div class="col-md-2">
                <label class="form-label">kilometro</label>
                <input class="form-control border border-2" type="number" id="kilometro" name="kilometro" value="<?php echo $kilometro; ?>">
            </div>
            <div class="col-md-2">
                <label class="form-label">direccion_sentido</label>
                <input class="form-control border border-2" type="text" id="direccion_sentido" name="direccion_sentido" minlength="1" maxlength="10" value="<?php echo $direccion_sentido; ?>">
            </div>
            <div class="col-md-2">
                <div class="controls">
                    <label class="form-label">municipio</label>
                </div>
                <select class="form-select border border-2" id="municipio" name="municipio">
                    <option value="Amealco de Bonfil" <?php if ($municipio == "Amealco de Bonfil") echo "selected"; ?>>Amealco de Bonfil</option>
                    <option value="Pinal de Amoles" <?php if ($municipio == "Pinal de Amoles") echo "selected"; ?>>Pinal de Amoles</option>
                    <option value="Arroyo Seco" <?php if ($municipio == "Arroyo Seco") echo "selected"; ?>>Arroyo Seco</option>
                    <option value="Cadereyta de Montes" <?php if ($municipio == "Cadereyta de Montes") echo "selected"; ?>>Cadereyta de Montes</option>
                    <option value="Colón" <?php if ($municipio == "Colón") echo "selected"; ?>>Colón</option>
                    <option value="Corregidora" <?php if ($municipio == "Corregidora") echo "selected"; ?>>Corregidora</option>
                    <option value="Ezequiel Montes" <?php if ($municipio == "Ezequiel Montes") echo "selected"; ?>>Ezequiel Montes</option>
                    <option value="Huimilpan" <?php if ($municipio == "Huimilpan") echo "selected"; ?>>Huimilpan</option>
                    <option value="Jalpan de Serra" <?php if ($municipio == "Jalpan de Serra") echo "selected"; ?>>Jalpan de Serra</option>
                    <option value="Landa de Matamoros" <?php if ($municipio == "Landa de Matamoros") echo "selected"; ?>>Landa de Matamoros</option>
                    <option value="El Marqués" <?php if ($municipio == "El Marqués") echo "selected"; ?>>El Marqués</option>
                    <option value="Pedro Escobedo" <?php if ($municipio == "Pedro Escobedo") echo "selected"; ?>>Pedro Escobedo</option>
                    <option value="Peñamiller" <?php if ($municipio == "Peñamiller") echo "selected"; ?>>Peñamiller</option>
                    <option value="Querétaro" <?php if ($municipio == "Querétaro") echo "selected"; ?>>Querétaro</option>
                    <option value="San Joaquín" <?php if ($municipio == "San Joaquín") echo "selected"; ?>>San Joaquín</option>
                    <option value="San Juan del Río" <?php if ($municipio == "San Juan del Río") echo "selected"; ?>>San Juan del Río</option>
                    <option value="Tequisquiapan" <?php if ($municipio == "Tequisquiapan") echo "selected"; ?>>Tequisquiapan</option>
                    <option value="Tolimán" <?php if ($municipio == "Tolimán") echo "selected"; ?>>Tolimán</option>
                </select>
            </div>
            
            <div class="col-md-2">
                <label class="form-label">referencia_lugar</label>
                <input class="form-control border border-2" type="text" id="referencia_lugar" name="referencia_lugar" minlength="1" maxlength="50" value="<?php echo $referencia_lugar; ?>">
            </div>
            <div class="col-md-2">
                <label class="form-label">articulo_fundamento</label>
                <input class="form-control border border-2" type="text" id="articulo_fundamento" name="articulo_fundamento" minlength="1" maxlength="10" value="<?php echo $articulo_fundamento; ?>">
            </div>
            
            <div class="col-md-5">
                <label class="form-label">motivo</label>
                <input class="form-control border border-2" type="text" id="motivo" name="motivo" minlength="1" maxlength="100" value="<?php echo $motivo; ?>">
            </div>
            
            <div class="col-md-2">
                <label class="form-label">garantia_retenida</label>
                <input class="form-control border border-2" type="text" id="garantia_retenida" name="garantia_retenida" minlength="1" maxlength="30" value="<?php echo $garantia_retenida; ?>">
            </div>
            
            <div class="col-md-4">
                <label class="form-label">convenio</label>
                <input class="form-control border border-2" type="text" id="convenio" name="convenio" minlength="1" maxlength="2" value="<?php echo $convenio; ?>">
            </div>
            
            <div class="col-md-3">
                <label class="form-label">puesto_a_disposicion</label>
                <input class="form-control border border-2" type="text" id="puesto_a_disposicion" name="puesto_a_disposicion" minlength="1" maxlength="2" value="<?php echo $puesto_a_disposicion; ?>">
            </div>
            
            <div class="col-md-2">
                <label class="form-label">calificacion_boleta</label>
                <input class="form-control border border-2" type="text" id="calificacion_boleta" name="calificacion_boleta" minlength="1" maxlength="100" value="<?php echo $calificacion_boleta; ?>">
            </div>
            
            <div class="col-md-2">
                <label class="form-label">deposito_oficial</label>
                <input class="form-control border border-2" type="text" id="deposito_oficial" name="deposito_oficial" minlength="1" maxlength="50" value="<?php echo $deposito_oficial; ?>">
            </div>
            
            <div class="col-md-6">
                <label class="form-label">observaciones_personal_operativo</label>
                <input class="form-control border border-2" type="text" id="observaciones_personal_operativo" name="observaciones_personal_operativo" minlength="1" maxlength="100" value="<?php echo $observaciones_personal_operativo; ?>">
            </div>
            
            <div class="col-md-6">
                <label class="form-label">observaciones_conductor</label>
                <input class="form-control border border-2" type="text" id="observaciones_conductor" name="observaciones_conductor" minlength="1" maxlength="100" value="<?php echo $observaciones_conductor; ?>">
            </div>
            
            <div class="col-md-3">
                <label class="form-label">numero_parte_accidente</label>
                <input class="form-control border border-2" type="number" id="numero_parte_accidente" name="numero_parte_accidente" value="<?php echo $numero_parte_accidente; ?>">
            </div>
            
            <div class="col-md-2">
                <label class="form-label">id_personal_operativo</label>
                <input class="form-control border border-2" type="number" id="id_personal_operativo" name="id_personal_operativo" value="<?php echo $id_personal_operativo; ?>" disabled>
            </div>
            
            <div class="col-md-2">
                <label class="form-label">id_tarjeta_circulacion</label>
                <input class="form-control border border-2" type="number" id="id_tarjeta_circulacion" name="id_tarjeta_circulacion" value="<?php echo $id_tarjeta_circulacion; ?>" disabled>
            </div>
            
            <div class="col-md-2">
                <label class="form-label">id_licencia</label>
                <input class="form-control border border-2" type="text" id="id_licencia" name="id_licencia" minlength="1" maxlength="100" value="<?php echo $id_licencia; ?>" disabled>
            </div>
            
            <div class="col-md-2">
                <label class="form-label">id_vehiculo</label>
                <input class="form-control border border-2" type="number" id="id_vehiculo" name="id_vehiculo" value="<?php echo $id_vehiculo; ?>" disabled>
            </div>
            
            <div class="col-12 p-4" style="text-align: center;">
                <input type="submit" class="form_input submit_radius btn btn-success center"
                    style="padding-left: 50px; padding-right: 50px;">
            </div>
        </form>
    </div>
    
    <script src="../Javascripts/backHome.js"></script>
</body>
</html>