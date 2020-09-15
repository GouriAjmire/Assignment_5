// import fetch from 'isomorphic-unfetch';
// var fetch = require('isomorphic-unfetch');
// const myform = document.getElementById('regform');
// myform.addEventListener('submit',function(e){
// e.preventDefault();

// const formdata = new FormData(this);

// fetch('insert.php',{
//   method: 'POST',
//   body: formdata
// }).then(function(response){
//   return response.text();
// }).then(function(text){
//   console.log(text);
// }).catch(function(error){
//   console.error(error);
// })
// });



// document.querySelector('#regform').addEventListener('submit', function(e) {
//   e.preventDefault();
//   let form = document.querySelector('#regform');
//   const data = new URLSearchParams();
//   for (let p of new FormData(form)){
//     data.append(p[0],p[1]);
//   }

//   fetch('/insert.php', {
//     method: 'POST',
//     body: data
//   }).then(response => response.text()).then(response => {
//     document.querySelector('.msg').innerHTML = response;
//   }).catch(error => console.log(error));


// });





function validation()
{
  var valid1=true;
  var username=document.getElementById("n1").value;
  var useremail=document.getElementById("n2").value;
  var userphone=document.getElementById("n3").value;
  var userapart=document.getElementById("apartment").value;

 if(username.length<3 || username.length>30)
  {
  alert("enter valid name");
  valid1= false;
  }

  else if(useremail.indexOf("@") == -1 || useremail.length<10)
  {
    alert("Enter valid email");
    valid1= false;
  }

  else if(isNaN(userphone) || userphone.length!=10)
  {
    alert("enter valid phone number");
    valid1= false;
  }
  else if(userapart=="---Choose Option")
  {
    alert("Select required apartment type");
    valid1= false;
  }
  return valid1;
};


