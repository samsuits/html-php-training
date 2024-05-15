function validate() {
  username = document.getElementById("username");
  password = document.getElementById("password");

  if (username.value == "" || password.value == "") {
    alert("Please enter username and password");
  } else {
    alert("Login");
  }
}
