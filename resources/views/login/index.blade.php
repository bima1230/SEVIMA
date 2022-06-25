<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     {{-- css --}}
     <link rel="stylesheet" href="/css/signin.css">
    <title>RUANG KELAS</title>
    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">RUANG KELAS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link" href="/">BACK</a>
              <a class="nav-link" href="/register">REGISTER</a>
            </div>
          </div>
        </div>
      </nav>
  </head>
  <body>

    <div class="row justify-content-center">
      <div class="col-md-7">

   @if(session()->has('success'))
   <div class="alert alert-success" role="alert">
    {{session('success')}}
</div>
    @endif


    @if(session()->has('loginError'))
    <div class="alert alert-danger" role="alert">
     {{session('loginError')}}
 </div>
     @endif




    <main class="form-signin w-100 m-auto">
      <form action="/login" method="post">
        @csrf
        <img class="mb-4" src="/img/orang.png" alt="" width="82" height="77">
        <h1 class="h3 mb-3 fw-normal">Please Login</h1>
    
        <div class="form-floating">
          <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" autofocus required>
          <label for="email">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
      </form>
    </main>
   

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
