<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <!-- Add Axios library -->
  <script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}" >
</head>
<body>
  <div class="login-form">
    <div id="login-form">
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="form-control" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" class="form-control" required>
      </div>
      <button type="submit" class="btn" onclick="login(email.value, password.value)">Log in</button>
    </div>
    <h5 id="error"></h5>
  </div>

  <script>
    async function login(user, pwd) {
      try {
        const response = await axios.post('/login', { username: user, password: pwd });
        // The request was successful, we'll receive a 200 status code
        // and proceed to redirect to the dashboard page
        window.location = '/dashboard';
      } catch (error) {
        // An error occurred, we'll receive a 401 status code
        console.error(error);
        document.getElementById("error").innerHTML = "Unauthenticated!";
      }
    }
  </script>