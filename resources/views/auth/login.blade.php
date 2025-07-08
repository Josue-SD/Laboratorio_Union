<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-blue-100 to-indigo-200 min-h-screen flex items-center justify-center">
    <div class="flex w-full h-screen">

        <!-- Ilustración -->
        <div class="hidden lg:flex items-center justify-center flex-1 bg-white">
            <img src="https://static.vecteezy.com/system/resources/previews/035/536/599/non_2x/ai-generated-minimalist-ui-illustration-of-a-molecular-biologist-conducting-dna-analysis-in-a-flat-illustration-free-photo.jpg"
                alt="Illustration" class="w-full">
        </div>

        <!-- Formulario -->
        <div class="bg-gradient-to-br from-blue-100 to-indigo-200 flex items-center justify-center flex-1 bg-gray-100">
            <div class="max-w-md w-full bg-white p-8 rounded-2xl shadow-lg">
                <h2 class="text-3xl font-bold text-center mb-6 text-indigo-700">Iniciar sesión</h2>

                @if ($errors->any())
                    <div class="bg-red-100 text-red-700 px-4 py-2 rounded mb-4">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form method="POST" action="{{ url('/login') }}">
                    @csrf

                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-semibold mb-1">Correo
                            electrónico</label>
                        <input type="email" id="email" name="email" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>

                    <!-- Password -->
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 font-semibold mb-1">Contraseña</label>
                        <input type="password" id="password" name="password" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
                    </div>

                    <!-- Botón -->
                    <div class="mb-4">
                        <button type="submit"
                            class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition">
                            Entrar
                        </button>
                    </div>

                    <!-- Registro -->
                    <div class="text-center">
                        <p class="text-gray-600">¿No tienes cuenta?</p>
                        <a href="{{ route('register') }}" class="text-blue-600 hover:underline mt-2 inline-block">
                            <i class="fas fa-user-plus mr-2"></i> Registrarse
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Font Awesome para íconos -->
    <script src="https://kit.fontawesome.com/a2e0e6ad3f.js" crossorigin="anonymous"></script>
</body>

</html>
