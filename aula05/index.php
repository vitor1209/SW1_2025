<html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  <style>
        body {
            background: linear-gradient(to right, #1f2937, #111827);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card {
            width: 30%;
            padding: 30px;
            border-radius: 12px;
        }
        .btn-custom {
            width: 100%;
        }
    </style>
    <div class="card p-4">
      <h3 class="text-center">Login</h3>
        <form action="processa.php" method="POST">
        <div data-mdb-input-init class="form-outline mb-4">
          <label class="form-label" for="form2Example1">Username</label>
          <input type="text" id="form2Example1" class="form-control" name="cxUser" required/>
        </div>

        <!-- Email input -->
        <div data-mdb-input-init class="form-outline mb-4">
          <label class="form-label" for="form2Example1">Email</label>
          <input type="email" id="form2Example1" class="form-control" name="cxEmail" required/>
        </div>

        <!-- Password input -->
        <div data-mdb-input-init class="form-outline mb-4">
          <label class="form-label" for="form2Example2">Password</label>
          <input type="password" id="form2Example2" class="form-control" name="cxSenha" required/>
        </div>

        <!-- Submit button -->
        <input type="submit" value="Sign in" class="btn btn-outline-primary btn-custom mb-4">
        </form>
    </div>
    <Script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></Script>
  </body>
</html>