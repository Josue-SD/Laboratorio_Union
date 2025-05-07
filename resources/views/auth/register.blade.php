<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>

    <!-- MDB CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        .card-body {
            font-size: 1.1rem;
        }
        .form-label {
            font-size: 1.05rem;
        }
    </style>
</head>
<body>

<section class="text-center">
    <!-- Background -->
    <div class="p-5 bg-image" style="
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 300px;"></div>

    <div class="container d-flex justify-content-center">
        <div class="card shadow-5-strong bg-body-tertiary"
             style="margin-top: -100px; backdrop-filter: blur(30px); max-width: 800px; width: 100%;">
            <div class="card-body py-5 px-md-5">

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <h2 class="fw-bold mb-5">Registro</h2>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                {{ $errors->first() }}
                            </div>
                        @endif

                        <form method="POST" action="{{ url('/register') }}">
                            @csrf

                            <div class="form-outline mb-4">
                                <input type="text" id="name" name="name" class="form-control form-control-lg" required />
                                <label class="form-label" for="name">Nombre</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="email" id="email" name="email" class="form-control form-control-lg" required />
                                <label class="form-label" for="email">Correo electrónico</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" id="password" name="password" class="form-control form-control-lg" required />
                                <label class="form-label" for="password">Contraseña</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control form-control-lg" required />
                                <label class="form-label" for="password_confirmation">Confirmar contraseña</label>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block mb-4">
                                Registrarse
                            </button>

                            <div class="text-center">
                                <p>¿Ya tienes cuenta? <a href="{{ route('login') }}">Inicia sesión</a></p>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- MDB JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
</body>
</html>
