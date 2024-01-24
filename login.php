<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <title>Signin Template · Bootstrap v5.3</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- Custom styles for this template -->
  <link href="assets/sign-in.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/style.css">
</head>

<body class="d-flex align-items-center py-4 ">
  <main class=" form-signin w-100 m-auto ">
    <form class="needs-validation" novalidate>
      <p class="text-center fs-1"><i class="bi bi-car-front"></i> </p>
      <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
        <div class="invalid-feedback">
          Please select a valid state.
        </div>

      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>

      <div class="form-check text-start my-3">
        <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
          Remember me
        </label>
      </div>
      <button class="btn w-100 py-2" style="background-color: #ced4da;" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-body-secondary text-center">&copy; apordering 2023 - 2024</p>
    </form>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>