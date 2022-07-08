"use strict";

const btnLoad = document.getElementById('reload'),
      errorBox = document.querySelector('.alert'),
      table = document.querySelector('.table'),
      loader = document.getElementById('loader'),
      form = document.getElementById('form-users');

function loadUsers(){
  table.innerHTML = `
                      <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Edad</th>
                        <th scope="col">País</th>
                        <th scope="col">Correo</th>
                      </tr>
                      </thead>
                      <tbody class="table__content"></tbody>`;

  let conection = new XMLHttpRequest();
  conection.open('GET','php/users.php');
  loader.classList.add('active');

  conection.onload = function(){
    let data = JSON.parse(conection.responseText);

    if(data.error){
      errorBox.classList.remove('d-none');
    }else{
      //debugger
      for(let i = 0; i < data.length; i++){
        let tbody = document.querySelector('.table__content');
        let element = document.createElement("tr");
        element.innerHTML += "<th scope='row'>" + data[i].id + "</th>";
        element.innerHTML += "<td>" + data[i].name + "</td>";
        element.innerHTML += "<td>" + data[i].age + "</td>";
        element.innerHTML += "<td>" + data[i].email + "</td>";
        element.innerHTML += "<td>" + data[i].country + "</td>";
        tbody.appendChild(element);
      }

    }
  }

  conection.onreadystatechange = function(){
    if(conection.readyState === 4 && conection.status === 200) {
      loader.classList.remove('active');
    }
  }

  conection.send();

}


function addUsers(e){
  e.preventDefault();
  
  debugger
  let user_name, user_age, user_country,user_email;

  let conection = new XMLHttpRequest();
  conection.open("POST",'php/add_users.php');
  
  // * We clean the fields obtained from the form
  user_name = form.username.value.trim();
  user_age = parseInt(form.age.value.trim());
  user_country = form.country.value.trim();
  user_email = form.email.value.trim();

  if(validateForm(user_name, user_age, user_country,user_email)){
    // * We send the data to the file and show all the records
    let params = `username=${user_name}&age=${user_age}&country=${user_country}&email=${user_email}`;
    errorBox.classList.contains('d-none') ? '' : errorBox.classList.add('d-none');
    // * It is important to use it when we send data to some file
    conection.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    loader.classList.add('active');

    conection.onload = function(){
      loadUsers();
      form.username.value = '';
      form.age.value = '';
      form.country.value = '';
      form.email.value = '';
    }

    conection.onreadystatechange = function(){
      if(conection.readyState === 4 && conection.status === 200){
        loader.classList.remove('active');
      }
    }
    debugger
    conection.send(params);
  }else{
    errorBox.classList.remove('d-none');
    document.querySelector('.alert > p').textContent = "Por favor completa el formulario correctamente";
  }
  
}

btnLoad.addEventListener('click', loadUsers);
form.addEventListener('submit', (e) => {addUsers(e)});

function validateForm(user_name, user_age, user_country,user_email){
  switch(true){
    case user_name = '':
      return false;
    break;
    case isNaN(user_age):
      return false;
    break;
    case user_country = '':
      return false;
    break;
    case user_email = '':
      return false;
    break;
    default:
      return true;
    break;
  }
}