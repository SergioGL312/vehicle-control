const municipioSelect = document.getElementById('municipio');

const municipios = [
'Amealco de Bonfil', 'Pinal de Amoles', 'Arroyo Seco', 
'Cadereyta de Montes', 'Colón', 'Corregidora', 
'Ezequiel Montes', 'Huimilpan', 'Jalpan de Serra',
'Landa de Matamoros', 'El Marqués', 'Pedro Escobedo',
'Peñamiller', 'Querétaro', 'San Joaquín', 'San Juan del Río',
'Tequisquiapan', 'Tolimán'
];


(function rellenarMunicipio(){
    for (const municipio of municipios) {
        const option = document.createElement("option");
        option.value = municipio;
        option.textContent = municipio;
        municipioSelect.appendChild(option);
    }
    municipioSelect.value = "Amealco de Bonfil";
})();

// municipioSelect.onchange = function() {
//     return municipioSelect.value;
// }