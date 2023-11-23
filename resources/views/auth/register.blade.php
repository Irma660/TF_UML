<x-guest-layout>
    <style>
        /* Estilos personalizados para el formulario */
        body {
            font-family: 'Montserrat', sans-serif;
            
        }

        .custom-form-container {
            max-width: 400px;
            margin: auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-top: 50px;
        }

        .custom-form-label {
            font-size: 16px;
            margin-bottom: 8px;
            display: block;
            text-align: left;
        }

        .custom-form-input {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .custom-checkbox-label {
            display: flex;
            align-items: center;
            font-size: 14px;
            margin-top: 8px;
            text-align: left;
        }

        .custom-submit-button {
            background-color: #4caf50;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .custom-submit-button:hover {
            background-color: #45a049;
        }

        .custom-forgot-password {
            margin-top: 16px;
            font-size: 14px;
            text-align: right;
        }

        .custom-error-message {
            color: red;
            margin-top: 8px;
        }

        .custom-logo {
            max-width: 100px;
            margin-bottom: 20px;
        }
        /* Estilos personalizados para botones y enlaces */
.custom-forgot-password {
    font-size: 14px;
    color: #3498db; /* Color del enlace */
}

.custom-submit-button {
    background-color: #2ecc71; /* Color de fondo del botón */
    color: #ffffff; /* Color del texto del botón */
    padding: 12px 20px; /* Ajustar el padding según sea necesario */
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Sombra del botón */
}

.custom-submit-button:hover {
    background-color: #27ae60; /* Cambiar color al pasar el ratón por encima */
}
    </style>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('register') }}" class="custom-form-container">
        @csrf

        <img class="custom-logo" src="assets/img/insignia.png" alt="Logo">

        <!-- Name -->
        <div>
            <label class="custom-form-label" for="name">{{ __('Nombres') }}</label>
            <input id="name" class="custom-form-input" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="custom-error-message" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <label class="custom-form-label" for="email">{{ __('Email') }}</label>
            <input id="email" class="custom-form-input" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="custom-error-message" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label class="custom-form-label" for="password">{{ __('Contraseña') }}</label>
            <input id="password" class="custom-form-input" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="custom-error-message" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <label class="custom-form-label" for="password_confirmation">{{ __('Confirmar contraseña') }}</label>
            <input id="password_confirmation" class="custom-form-input" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="custom-error-message" />
        </div>

        <div class="flex items-center justify-between mt-4">
            <a class="custom-forgot-password" href="{{ route('login') }}">
                {{ __('¿Ya está registrado?') }}
            </a>

            <button class="custom-submit-button ml-4" type="submit">
                {{ __('Registrar') }}
            </button>
        </div>

    </form>
</x-guest-layout>
