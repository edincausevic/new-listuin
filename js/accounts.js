// remeber username
var username = document.getElementById('loginEmail');
function remeberUsername() {
  
  if (username.value.length > 0) {
    localStorage.setItem('username', username.value);
  }
}

username.value = localStorage.getItem('username');