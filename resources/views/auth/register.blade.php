<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Signin Template · Bootstrap v5.0</title>

 
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="{{ asset('assets/signin.css') }}" rel="stylesheet">
</head>

<body class="text-center">

  <main class="form-signin">
    <form action="/register" method="POST">
      @csrf
      <img class="mb-4" src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

      <div class="form-floating">
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Name" value="{{ old('name') }}">
        <label for="name">Name</label>
          @error('name')
          <div class="invalid-feedback mb-2"> {{ $message }} </div>
          @enderror
      </div>

      <div class="form-floating">
        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" value="{{ old('username') }}">
        <label for="username">Username</label>
        @error('username')
        <div class="invalid-feedback mb-2"> {{ $message }} </div>
        @enderror
      </div>

      <div class="form-floating">
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email@gmail.com" value="{{ old('email') }}">
        <label for="email">Emai</label>
        @error('email')
        <div class="invalid-feedback mb-2"> {{ $message }} </div>
        @enderror
      </div>

      <div class="form-floating">
        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
        <label for="password">Password</label>
        @error('password')
        <div class="invalid-feedback mb-2"> {{ $message }} </div>
        @enderror
      </div>

      <button class="w-100 btn btn-lg btn-dark" type="submit">Register</button>

      <div class="text-muted mt-3">Already have account? ? <a href="/login" class="text-decoration-none text-dark">Login Here</a></div>

      <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
    </form>
  </main>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  
</body>

</html>