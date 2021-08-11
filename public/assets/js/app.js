// require('./bootstrap');



window.onload = function() {
  var loginButton = document.getElementById('loginButton');

  if (loginButton) {
  document.getElementById('loginButton').addEventListener("click", validate);

}

  function validate() {

    if ( document.getElementById('email').value != 'admin@admin.com' &&
         document.getElementById('password').value != 'password' ) {

      alert('invalid email and password');


    } else {
      if ( document.getElementById('email').value != 'admin@admin.com' ) {

        alert('invalid email');


      } else {
        if ( document.getElementById('email').value == 'admin@admin.com' &&
             document.getElementById('password').value != 'password' ) {

          alert('invalid password');
          

      } else {
        console.log('finished');
    }
   }
  }
}
}
