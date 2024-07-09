document.getElementById('login-form').addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent form submission to server
  
  var username = document.getElementById('username').value.trim();
  
  if (username !== 'padding:') {
    updateScore(-2, '2');
  } else {
    updateScore(5, 'nextLevel'); // Redirect to another HTML page or route
  }
});

document.getElementById('login-form').addEventListener('keydown', function(event) {
  if (event.key === 'Enter') {
    event.preventDefault(); // Prevent default form submission on Enter
    document.getElementById('login-button').click(); // Programmatically click the login button
  }
});
