def php():
    tabla = "conductores"
    id = 'id'

    php = "<?php\n"
    php += "    include(\"../database/db.php\");\n"
    php += "\n"
    php += "    if (isset($_GET['id'])) {\n"
    php += f"	${id} = $_GET['{id}'];\n"
    php += f"	$query = \"SELECT * FROM {tabla} WHERE {id} = '${id}';\";\n"
    php += "\n"
    php += "	$con = conectar();\n"
    php += "	$result = ejecutar($con, $query);\n"
    php += "	if (mysqli_num_rows($result) == 1) {\n"
    php += "	    $fila = mysqli_fetch_array($result);"
    print(php)
    atributo_php_select()
    # php += "			$id = $fila['id'];"
    # php += "			$tipo = $fila['tipo'];"
    # php += "			$fecha_expedicion = $fila['fecha_expedicion'];"
    # php += "			$fecha_vencimiento = $fila['fecha_vencimiento'];"
    # php += "			$atributo_desconocido = $fila['atributo_desconocido'];"
    # php += "			$observacion = $fila['observacion'];"
    # php += "			$id_conductor = $fila['id_conductor'];"
    php1 = "	}\n"
    php1 += "    }\n"
    php1 += "\n"
    php1 += "    if (isset($_POST['update'])) {"
    print(php1)
    atributo_php_update_1()
    # php += "		$tipo = $_POST['tipo'];\n"
    # php += "		$fecha_expedicion = $_POST['fecha_expedicion'];\n"
    # php += "		$fecha_vencimiento = $_POST['fecha_vencimiento'];\n"
    # php += "		$atributo_desconocido = $_POST['atributo_desconocido'];\n"
    # php += "		$observacion = $_POST['observacion'];\n"
    # php += "		$id_conductor = $_POST['id_conductor'];\n"
    php2 = "\n"
    php2 += f"	$query = \"UPDATE {tabla} SET"
    print(php2)
    atributo_php_update_3()
    # php2 += "	tipo = '$tipo',\n"
    # php2 += "	fecha_expedicion = '$fecha_expedicion',\n"
    # php2 += "	fecha_vencimiento = '$fecha_vencimiento',\n"
    # php2 += "	atributo_desconocido = '$atributo_desconocido',\n"
    # php2 += "	observacion = '$observacion',\n"
    # php2 += "	id_conductor = '$id_conductor' \n"
    php3 = f"	WHERE {id} = '${id}';\";\n"
    php3 += "	$result = ejecutar($con, $query);\n"
    php3 += f"	echo \"<script>alert('{tabla} Actualizada');</script>\";\n"
    php3 += "        cerrar($con);\n"
    php3 += "    }\n"
    php3 += "\n"
    php3 += "?>\n"
    print(php3)

def atributo_php_select():
    atributos = [
        "id",
        "nombre",
        "apellido_paterno",
        "apellido_materno",
        "domicilio",
        "fecha_nacimiento",
        "sexo",
        "firma",
        "num_emergencia",
        "donador",
        "antiguedad",
        "grupo_sanguineo",
        "restricciones"
    ]

    for i in range(0, len(atributos)):
        print(f"	    ${atributos[i]} = $fila['{atributos[i]}'];")

def atributo_php_update_1():
    atributos = [
        "nombre",
        "apellido_paterno",
        "apellido_materno",
        "domicilio",
        "fecha_nacimiento",
        "sexo",
        "firma",
        "num_emergencia",
        "donador",
        "antiguedad",
        "grupo_sanguineo",
        "restricciones"
    ]

    for i in range(0, len(atributos)):
        print(f"	${atributos[i]} = $_POST['{atributos[i]}'];")

def atributo_php_update_2():
    atributos = [
        "nombre",
        "apellido_paterno",
        "apellido_materno",
        "domicilio",
        "fecha_nacimiento",
        "sexo",
        "firma",
        "num_emergencia",
        "donador",
        "antiguedad",
        "grupo_sanguineo",
        "restricciones"
    ]

    for i in range(0, len(atributos)):
        if (i < len(atributos)):
            print(f"{i} if2	{atributos[i]} = '${atributos[i]}'")
        else:
            print(f"{i} if1	{atributos[i]} = '${atributos[i]}',")
        

def atributo_php_update_3():
    atributos = [
        "nombre",
        "apellido_paterno",
        "apellido_materno",
        "domicilio",
        "fecha_nacimiento",
        "sexo",
        "firma",
        "num_emergencia",
        "donador",
        "antiguedad",
        "grupo_sanguineo",
        "restricciones"
    ]

    for i in range(0, len(atributos)):
        if (i < len(atributos)):
            print(f"	{atributos[i]} = '${atributos[i]}',")
        elif (i == len(atributos)):
            print(f"	{atributos[i]} = '${atributos[i]}'")


def html():
    tabla = "Conductores"

    html = "<!DOCTYPE html>\n"
    html += "<html lang=\"en\">\n"
    html += "<head>\n"
    html += "    <meta charset=\"UTF-8\">\n"
    html += "    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n"
    html += "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n"
    html += f"    <title>Update {tabla}</title>\n"
    html += "</head>\n"
    html += "<body>\n"

    html += "    <header>\n"
    html += "        <div class=\"container-title\">\n"
    html += f"            <h1>Update {tabla}</h1>\n"
    html += "        </div>\n"
    html += "        <div class=\"container-button\">\n"
    html += "            <button id=\"back-home\">Regresar</button>\n"
    html += "        </div>\n"
    html += "    </header>\n"
    html += "    <div class=\"flex_container\">\n"
    html += "        <div class=\"border\">\n"
    
    html += "        </div>\n"
    html += "    </div>\n"
    html += "    <script src=\"./Javascripts/backHome.js\"></script>\n"
    html += "</body>\n"
    html += "</html>\n"    
    print(html)

def value():
    atributos = [
"id",
        "nombre",
        "apellido_paterno",
        "apellido_materno",
        "domicilio",
        "fecha_nacimiento",
        "sexo",
        "firma",
        "num_emergencia",
        "donador",
        "antiguedad",
        "grupo_sanguineo",
        "restricciones"
    ]
    i = 0
    while (i < len(atributos)):
        print(f"value=\"<?php echo ${atributos[i]} ?>\"")
        i += 1

def main():
    # php()
    # html()
    value()
    # atributo_php_update_2()
   

if __name__ == "__main__":
    main()


# html += f"            <form method=\"get\" action=\"./Insert/I{tabla}.php\">\n"
    # html += "                <div class=\"label_container\">\n"
    # html += "                    <label for=\"\">folio</label>\n"
    # html += "                </div>\n"
    # html += "                <div class=\"container_input\">\n"
    # html += "                    <input type=\"text\" id=\"folio\" name=\"folio\" maxlength=\"20\">\n"
    # html += "                </div>\n"
    # html += "                <div class=\"label_container\">\n"
    # html += "                    <label for=\"\">dia</label>\n"
    # html += "                </div>\n"
    # html += "                <div class=\"container_input\">\n"
    # html += "                    <select name=\"dia\" id=\"dia\"></select>\n"
    # html += "                </div>\n"
    # html += "                <div class=\"label_container\">\n"
    # html += "                    <label for=\"\">mes</label>\n"
    # html += "                </div>                \n"
    # html += "                <div class=\"container_input\">\n"
    # html += "                    <select name=\"mes\" id=\"mes\"></select>\n"
    # html += "                </div>\n"
    # html += "                \n"
    # html += "                <div class=\"label_container\">\n"
    # html += "                    <label for=\"\">anio</label>\n"
    # html += "                </div>\n"
    # html += "                <div class=\"container_input\">\n"
    # html += "                    <select name=\"anio\" id=\"anio\"></select>\n"
    # html += "                </div>\n"
    # html += "                <div class=\"label_container\">\n"
    # html += "                    <label for=\"\">hora</label>\n"
    # html += "                </div>\n"
    # html += "                <div class=\"container_input\">\n"
    # html += "                    <input type=\"time\" id=\"hora\" name=\"hora\">\n"
    # html += "                </div>\n"
    # html += " \n"
    # html += "                <div class=\"label_container\">\n"
    # html += "                    <label for=\"\">reporte_seccion</label>\n"
    # html += "                </div>                \n"
    # html += "                <div class=\"container_input\">\n"
    # html += "                    <input type=\"text\" id=\"reporte_seccion\" name=\"reporte_seccion\" minlength=\"5\" maxlength=\"30\">\n"
    # html += "                </div>\n"
    # html += "                \n"
    # html += "                <div class=\"label_container\">\n"
    # html += "                    <label for=\"\">nombre_via</label>\n"
    # html += "                </div>\n"
    # html += "                <div class=\"container_input\">\n"
    # html += "                    <input type=\"text\" id=\"nombre_via\" name=\"nombre_via\" minlength=\"5\" maxlength=\"50\">\n"
    # html += "                </div>\n"
    # html += "                <div class=\"label_container\">\n"
    # html += "                    <label for=\"\">kilometro</label>\n"
    # html += "                </div>\n"
    # html += "                <div class=\"container_input\">\n"
    # html += "                    <input type=\"number\" id=\"kilometro\" name=\"kilometro\">\n"
    # html += "                </div>\n"
    # html += "                <div class=\"label_container\">\n"
    # html += "                    <label for=\"\">direccion_sentido</label>\n"
    # html += "                </div>\n"
    # html += "                <div class=\"container_input\">\n"
    # html += "                    <input type=\"text\" id=\"direccion_sentido\" name=\"direccion_sentido\" minlength=\"1\" maxlength=\"10\">\n"
    # html += "                </div>\n"
    # html += "                <div class=\"label_container\">\n"
    # html += "                    <label for=\"\">municipio</label>\n"
    # html += "                </div>\n"
    # html += "                <div class=\"container_input\">\n"
    # html += "                    <select id=\"municipio\" name=\"municipio\"></select>\n"
    # html += "                </div>\n"
    # html += "                \n"
    # html += "                <div class=\"label_container\">\n"
    # html += "                    <label for=\"\">referencia_lugar</label>\n"
    # html += "                </div>\n"
    # html += "                <div class=\"container_input\">\n"
    # html += "                    <input type=\"text\" id=\"referencia_lugar\" name=\"referencia_lugar\" minlength=\"1\" maxlength=\"50\">\n"
    # html += "                </div>\n"
    # html += "                <div class=\"label_container\">\n"
    # html += "                    <label for=\"\">articulo_fundamento</label>\n"
    # html += "                </div>                \n"
    # html += "                <div class=\"container_input\">\n"
    # html += "                    <input type=\"text\" id=\"articulo_fundamento\" name=\"articulo_fundamento\" minlength=\"1\" maxlength=\"10\">\n"
    # html += "                </div>\n"
    # html += "                \n"
    # html += "                <div class=\"label_container\">\n"
    # html += "                    <label for=\"\">motivo</label>\n"
    # html += "                </div>\n"
    # html += "                <div class=\"container_input\">\n"
    # html += "                    <input type=\"text\" id=\"motivo\" name=\"motivo\" minlength=\"1\" maxlength=\"100\">\n"
    # html += "                </div>\n"
    # html += "                \n"
    # html += "                <div class=\"label_container\">\n"
    # html += "                    <label for=\"\">garantia_retenida</label>\n"
    # html += "                </div>\n"
    # html += "                <div class=\"container_input\">\n"
    # html += "                    <input type=\"text\" id=\"garantia_retenida\" name=\"garantia_retenida\" minlength=\"1\" maxlength=\"30\">\n"
    # html += "                </div>\n"
    # html += "                \n"
    # html += "                <div class=\"label_container\">\n"
    # html += "                    <label for=\"\">convenio</label>\n"
    # html += "                </div>\n"
    # html += "                <div class=\"container_input\">\n"
    # html += "                    <input type=\"text\" id=\"convenio\" name=\"convenio\" minlength=\"1\" maxlength=\"2\">\n"
    # html += "                </div>\n"
    # html += "                \n"
    # html += "                <div class=\"label_container\">\n"
    # html += "                    <label for=\"\">puesto_a_disposicion</label>\n"
    # html += "                </div>\n"
    # html += "                <div class=\"container_input\">\n"
    # html += "                    <input type=\"text\" id=\"puesto_a_disposicion\" name=\"puesto_a_disposicion\" minlength=\"1\" maxlength=\"2\">\n"
    # html += "                </div>\n"
    # html += "                \n"
    # html += "                <div class=\"label_container\">\n"
    # html += "                    <label for=\"\">calificacion_boleta</label>\n"
    # html += "                </div>\n"
    # html += "                <div class=\"container_input\">\n"
    # html += "                    <input type=\"text\" id=\"calificacion_boleta\" name=\"calificacion_boleta\" minlength=\"1\" maxlength=\"100\">\n"
    # html += "                </div>\n"
    # html += "                \n"
    # html += "                <div class=\"label_container\">\n"
    # html += "                    <label for=\"\">deposito_oficial</label>\n"
    # html += "                </div>\n"
    # html += "                <div class=\"container_input\">\n"
    # html += "                    <input type=\"text\" id=\"deposito_oficial\" name=\"deposito_oficial\" minlength=\"1\" maxlength=\"50\">\n"
    # html += "                </div>\n"
    # html += "                \n"
    # html += "                <div class=\"label_container\">\n"
    # html += "                    <label for=\"\">observaciones_personal_operativo</label>\n"
    # html += "                </div>\n"
    # html += "                <div class=\"container_input\">\n"
    # html += "                    <input type=\"text\" id=\"observaciones_personal_operativo\" name=\"observaciones_personal_operativo\" minlength=\"1\" maxlength=\"100\">\n"
    # html += "                </div>\n"
    # html += "                \n"
    # html += "                <div class=\"label_container\">\n"
    # html += "                    <label for=\"\">observaciones_conductor</label>\n"
    # html += "                </div>\n"
    # html += "                <div class=\"container_input\">\n"
    # html += "                    <input type=\"text\" id=\"observaciones_conductor\" name=\"observaciones_conductor\" minlength=\"1\" maxlength=\"100\">\n"
    # html += "                </div>\n"
    # html += "                \n"
    # html += "                <div class=\"label_container\">\n"
    # html += "                    <label for=\"\">numero_parte_accidente</label>\n"
    # html += "                </div>\n"
    # html += "                <div class=\"container_input\">\n"
    # html += "                    <input type=\"number\" id=\"numero_parte_accidente\" name=\"numero_parte_accidente\">\n"
    # html += "                </div>\n"
    # html += "                \n"
    # html += "                <div class=\"label_container\">\n"
    # html += "                    <label for=\"\">id_personal_operativo</label>\n"
    # html += "                </div>\n"
    # html += "                <div class=\"container_input\">\n"
    # html += "                    <input type=\"number\" id=\"id_personal_operativo\" name=\"id_personal_operativo\">\n"
    # html += "                </div>\n"
    # html += "                \n"
    # html += "                <div class=\"label_container\">\n"
    # html += "                    <label for=\"\">id_tarjeta_circulacion</label>\n"
    # html += "                </div>\n"
    # html += "                <div class=\"container_input\">\n"
    # html += "                    <input type=\"number\" id=\"id_tarjeta_circulacion\" name=\"id_tarjeta_circulacion\">\n"
    # html += "                </div>\n"
    # html += "                \n"
    # html += "                <div class=\"label_container\">\n"
    # html += "                    <label for=\"\">id_licencia</label>\n"
    # html += "                </div>\n"
    # html += "                <div class=\"container_input\">\n"
    # html += "                    <input type=\"text\" id=\"id_licencia\" name=\"id_licencia\" minlength=\"1\" maxlength=\"100\">\n"
    # html += "                </div>\n"
    # html += "                \n"
    # html += "                <div class=\"label_container\">\n"
    # html += "                    <label for=\"\">id_vehiculo</label>\n"
    # html += "                </div>\n"
    # html += "                <div class=\"container_input\">\n"
    # html += "                    <input type=\"number\" id=\"id_vehiculo\" name=\"id_vehiculo\">\n"
    # html += "                </div>\n"
    # html += "                \n"
    # html += "                <div class=\"form_submit\">\n"
    # html += "                    <input type=\"submit\">\n"
    # html += "                </div>\n"
    # html += "            </form>\n"