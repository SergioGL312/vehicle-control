
def days():
    echo = "echo \"selected\";"
    for i in range(1, 32):
        print(f"<option value=\"{i}\" <?php if ($dia == \"{i}\") { echo } ?>>{i}</option>")

def months():
    months = ["Enero", "Febrero", "Marzo", "Abril","Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    echo = "echo \"selected\";"

    for i in range(0, len(months)):
        print(f"<option value=\"{months[i]}\" <?php if ($mes == \"{months[i]}\") { echo } ?>>{months[i]}</option>")


def year():
    echo = "echo \"selected\";"
    anio_inicio = 1922
    list = []
    i = 0
    

    while int(anio_inicio) < 2023:
        print(f"<option value=\"{anio_inicio}\" <?php if ($anio == \"{anio_inicio}\") { echo } ?>>{anio_inicio}</option>")
        anio_inicio = int(anio_inicio) + 1
        i += 1
    print(i)

def municipios():
    municipios = [
    'Amealco de Bonfil', 'Pinal de Amoles', 'Arroyo Seco', 
    'Cadereyta de Montes', 'Colón', 'Corregidora', 
    'Ezequiel Montes', 'Huimilpan', 'Jalpan de Serra',
    'Landa de Matamoros', 'El Marqués', 'Pedro Escobedo',
    'Peñamiller', 'Querétaro', 'San Joaquín', 'San Juan del Río',
    'Tequisquiapan', 'Tolimán'
    ]
    echo = "echo \"selected\";"
    i = 0

    while int(i) < len(municipios):
        print(f"<option value=\"{municipios[i]}\" <?php if ($municipio == \"{municipios[i]}\") { echo } ?>>{municipios[i]}</option>")
        i  += 1

    print(f"size : {len(municipios)} \ncont : {i}")




def main():
    # days()
    # months()
    # year()
    municipios()

if __name__ == '__main__':
    main()