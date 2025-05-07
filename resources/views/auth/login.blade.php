<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <!-- MDB CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />
    <!-- Font Awesome para íconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        .card-body {
          font-size: 1.1rem; /* Aumenta el texto general */
        }
        .form-label {
          font-size: 1.05rem;
        }
      </style>
      
</head>
<body>

<!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 300px;"></div>
  <!-- Background image -->

  <div class="container d-flex justify-content-center">
    <div class="card shadow-5-strong bg-body-tertiary"
         style="margin-top: -100px; backdrop-filter: blur(30px); max-width: 800px; width: 100%;">
      <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-4">
          <h2 class="fw-bold mb-5">Iniciar sesión</h2>

          @if ($errors->any())
              <div class="alert alert-danger">
                  {{ $errors->first() }}
              </div>
          @endif

          <form method="POST" action="{{ url('/login') }}">
              @csrf

              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" name="email" id="email" class="form-control form-control-lg" required />
                <label class="form-label" for="email">Correo electrónico</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" name="password" id="password" class="form-control form-control-lg" required />
                <label class="form-label" for="password">Contraseña</label>
              </div>

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4">
                Entrar
              </button>

              <!-- Opciones sociales (opcional) -->
              <div class="text-center">
                <p>o regístrate con:</p>
                <a href="{{ route('register') }}" class="btn btn-link btn-floating mx-1" title="Registrarse">
                    <i class="fas fa-user-plus fa-2x"></i>
                </a>
                
                
              </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MDB JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
</body>
</html>
