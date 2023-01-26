
def template():
    tabla = "Verificaciones"

    html = "<!DOCTYPE html>\n"
    html += "<html lang=\"en\">\n"
    html += "<head>\n"
    html += "    <meta charset=\"UTF-8\">\n"
    html += "    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n"
    html += "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n"
    html += f"    <title>Select {tabla}</title>\n"
    html += "</head>\n"
    html += "<body>\n"

    html += "    <header>\n"
    html += "        <div class=\"container-title\">\n"
    html += f"            <h1>Select {tabla}</h1>\n"
    html += "        </div>\n"
    html += "        <div class=\"container-button\">\n"
    html += "            <button id=\"back-home\">Regresar</button>\n"
    html += "        </div>\n"
    html += "    </header>\n"
    
    html += "    <div class=\"flex_container\">\n"
    html += "        <div class=\"border\">\n"
    html += f"           <form method=\"POST\" action=\"S{tabla}.php\">\n"
    html += "                <div class=\"label_container\">\n"
    html += "                    <label for=\"\">Criterio</label>\n"
    html += "                </div>\n"
    html += "                <div class=\"container_input\">\n"
    html += "                    <input type=\"text\" id=\"criterio\" name=\"criterio\" class=\"form_input\">\n"
    html += "                </div>\n"
    
    html += "                <div class=\"label_container\">\n"
    html += "                    <label for="">Atributo</label>\n"
    html += "                </div>\n"

    

    html2 = "                <div class=\"form_submit\">\n"
    html2 += "                    <input type=\"submit\" class=\"form_input submit_radius\">\n"
    html2 += "                </div>\n"
    html2 += "            </form>\n"
    html2 += "        </div>\n"
    html2 += "    </div>\n"
    html2 += "    <script src=\"./Javascripts/backHome.js\"></script>\n\n"
    html2 += "</body>\n"
    html2 += "</html>\n"

    print(html)
    atributos()
    print(html2)

def  atributos():
    div1 = "                <div class=\"container_input\">"
    
    div2 = "                </div>\n"
    lista = [
"id",
"entidad_federativa",
"municipio",
"numero_centro_verificacion",
"numero_linea_verificacion",
"id_tecnico_verificador",
"fecha_expedicion",
"hora_entrada",
"hora_salida",
"motivo_verificacion",
"folio_certificacion",
"semestre",
"fecha_vencimiento",
"id_tarjeta_circulacion"
        ]
    for i in range(0, len(lista)):
        print(div1)
        print(div(lista[i]))
        print(div2)


def div(atributo):
    return f"                    <input type=\"radio\" id=\"atributo\" name=\"atributo\" class=\"form_input\" value=\"{atributo}\">{atributo}"


def php():
    tabla = "verificaciones"
    lista = [
"id",
"entidad_federativa",
"municipio",
"numero_centro_verificacion",
"numero_linea_verificacion",
"id_tecnico_verificador",
"fecha_expedicion",
"hora_entrada",
"hora_salida",
"motivo_verificacion",
"folio_certificacion",
"semestre",
"fecha_vencimiento",
"id_tarjeta_circulacion"
        ]

    php = "<?php\n"
    php += "    if (isset($_POST['criterio'])) {\n"
    php += "        $criterio = $_POST['criterio'];\n"
    php += "        $atributo = $_POST['atributo'];\n"
    php += "        include(\"db.php\");\n"
    php += f"        $sql = \"SELECT * FROM {tabla} WHERE $atributo LIKE '%$criterio%';\";\n"
    php += "        $con = conectar();\n"
    php += "        $result = ejecutar($con, $sql);\n"

    php += "        print(\"<table class=\\\" \\\">\n"
    php += "        <thead>\n"
    php += "            <tr>"

    print(php)

    for i in range(0, len(lista)):
        print(th(lista[i]))

    php2 = "            </tr>\n"
    php2 += "        </thead><tbody>\");\n"
    php2 += "        while ($fila = mysqli_fetch_row($result)) {\n"
    php2 += "            print(\"<tr>"

    print(php2)

    for i in range(0, len(lista)):
        print(td(i))

    php3 = "            </tr>\");\n"
    php3 += "        }\n"
    php3 += "        print(\"</tbody></table>\");\n"
    php3 += "        cerrar($con);\n"
    php3 += "    }\n"
    php3 += "?>\n"

    print(php3)

def th(atributo):
    return f"                <th>{atributo}</th>"

def td(i):
    return f"            <td>$fila[{i}]</td>"

def main():
    template()
    print("\n")
    php()

if __name__ == '__main__':
    main()