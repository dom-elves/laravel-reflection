require('./bootstrap');


console.log('working');

function validate() {
  if (document.adminLogin.email.value !== 'admin@admin.com' && document.adminLogin.password.value !== 'password' && ){
    alert('invalid email and password');
  }
}
