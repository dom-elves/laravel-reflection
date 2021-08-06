require('./bootstrap');




function validate() {
  if (document.adminLogin.email.value !== 'admin@admin.com' &&
      document.adminLogin.password.value !== 'password') {

    alert('invalid email and password');

  } else {
    if (document.adminLogin.email.value !== 'admin@admin.com') {

      alert('invalid email');

    } else {
      if (document.adminLogin.email.value == 'admin@admin.com' &&
          document.adminLogin.password.value !== 'password') {

        alert('invalid password');

    } else {
      window.location.href = "localhost:8000/admin";
    }
  }
 }
}
