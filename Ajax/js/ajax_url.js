"use strict";

let btn = document.querySelector("#reload");
let loader = document.querySelector("#loader");
let tableContent = document.querySelector(".table__content");

btn.addEventListener("click", function(){
  // * creamos una instancia para la peticion
  let url = new XMLHttpRequest();
  // * indicamos de que tipo sera la peticion y a que archivo o link la enviaremos
  url.open("GET", 'https://api.npoint.io/ae2c5e42eea2856888bf');
  
  loader.classList.add("active");

  /**
   * * comenzamos a obtener los datos que nos ha enviado la peticion
   * * onload nos servira para obtener los datos una vez que haya terminado de cargar
   * * JSON.parse,convierte el texto recibido en un JSON
   * * responseText, nos devuelve la peticion en una cadena de texto
   */
  url.onload = function(){
    let data = JSON.parse(url.responseText);

    // # forma 1 de cargar el contenido con forEach
/*     data.forEach(people => {
      let element = document.createElement("tr");
      element.innerHTML += "<th scope='row'>" + people.id + "</th>";
      element.innerHTML += "<td>" + people.name + "</td>";
      element.innerHTML += "<td>" + people.age + "</td>";
      element.innerHTML += "<td>" + people.email + "</td>";
      element.innerHTML += "<td>" + people.country + "</td>"
      tableContent.appendChild(element);
    });
 */
    // # forma 2 de cargar el contenido con ciclo for
    for(let i = 0; i < 10 ;i++){
      let element = document.createElement("tr");
      element.innerHTML += "<th scope='row'>" + data[i].id + "</th>";
      element.innerHTML += "<td>" + data[i].name + "</td>";
      element.innerHTML += "<td>" + data[i].age + "</td>";
      element.innerHTML += "<td>" + data[i].email + "</td>";
      element.innerHTML += "<td>" + data[i].country + "</td>"
      tableContent.appendChild(element);
    }
  }

  /**
   * * ejecutar una funcion cada que haya un cambio de estado a la peticion realizada, devuelve los siguientes numeros
   * * 2 significa que la peticion ha sido recibida
   * * 3 significa que la peticion esta siendo procesada 
   * * 4 significa que la peticion ha sido finalizada y la respuesta esta lista
   **/
  url.onreadystatechange = function(){
    if(url.readyState === 4 && url.status === 200){
      loader.classList.remove("active");
    }
  }

  // * enviamos la peticion
  url.send();
});