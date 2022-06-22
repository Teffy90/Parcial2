//Gráfica 1
var nombre = [];
var poblacion = [];


//consumo de la API
let url= 'http://127.0.0.1:8000/api/paises';
fetch(url)


//Then necesita una promesa, y esa promesa se resuelve
.then(datos_obtenidos => datos_obtenidos.json())

//datos_obtenidos es el resultado de la promesa repuesta
.then(function transformar (datos_obtenidos){
    //iteramos sobre cada dato
    datos_obtenidos.forEach (function agregar (datos_obtenidos)
    {
        if (datos_obtenidos.nombre != undefined && datos_obtenidos.poblacion != undefined){
            nombre.push(datos_obtenidos.nombre);
            poblacion.push(datos_obtenidos.poblacion);
        } 
    });
    let tableBody = document.getElementById('tbody');
    for (let i = 0; i < datos_obtenidos .length; i++) {
        // Creando los 'td' que almacenará cada parte de la información del usuario actual
        let id = `<td>${datos_obtenidos [i].id}</td>`;
        let nombre = `<td>${datos_obtenidos [i].nombre}</td>`;
        let capital = `<td>${datos_obtenidos [i].capital}</td>`;
        let idioma_oficial = `<td>${datos_obtenidos [i].idioma_oficial}</td>`;
        let poblacion = `<td>${datos_obtenidos [i].poblacion}</td>`;
    
        tableBody.innerHTML += `<tr>${id + nombre + capital + idioma_oficial + poblacion}</tr>`;
    }

    

    //variables para las graficas
    var graf1={
        x : nombre,
        y : poblacion,
        font:{
            family: 'Raleway, sans-serif'
          },
        type: 'bar'
    };

    var datosGraficas = [graf1];

    //Estilos de la gráfica
    var layout = {
        title: 'Idioma por Paises',
        height: 500,
        width: 600
    };

    Plotly.newPlot('grafica1', datosGraficas, layout);
    


});