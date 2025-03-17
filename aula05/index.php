<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex justify-content-center align-items-center ">
    <div class="card p-4" style="width: 30%;">
    <h3 class="text-center">Login</h3>
    <form action="processa.php" method="POST">
  <!-- Email input -->
  <div data-mdb-input-init class="form-outline mb-4">
      <label class="form-label" for="form2Example1">Email address</label>
    <input type="email" id="form2Example1" class="form-control" name="cxEmail" />
  </div>

  <!-- Password input -->
  <div data-mdb-input-init class="form-outline mb-4">
      <label class="form-label" for="form2Example2">Password</label>
    <input type="password" id="form2Example2" class="form-control" name="cxSenha" />
  </div>

  <!-- Submit button -->
  <input type="submit" value="Sign in" class="btn btn-primary btn-block mb-4">
</form>

    </div>

    <Script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></Script>
</body>
</html>