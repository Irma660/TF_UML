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
    </style>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="custom-form-container">
        @csrf

        <img class="custom-logo" src="assets/img/insignia.png"alt="Logo">

        <!-- Email Address -->
        <div>
            <label class="custom-form-label" for="email">{{ __('Email') }}</label>
            <input id="email" class="custom-form-input" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="custom-error-message" />
        </div>

        <!-- Password -->
        <div>
            <label class="custom-form-label" for="password">{{ __('Contraseña') }}</label>
            <input id="password" class="custom-form-input" type="password" name="password" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="custom-error-message" />
        </div>

        <!-- Remember Me -->
        <div class="custom-checkbox-label">
            <input id="remember_me" type="checkbox" name="remember">
            <label for="remember_me">{{ __('Recuerdámelo') }}</label>
        </div>

        <div>
            @if (Route::has('password.request'))
                <a class="custom-forgot-password" href="{{ route('password.request') }}">
                    {{ __('¿Olvidaste tu contraseña?') }}
                </a>
            @endif

            <button class="custom-submit-button" type="submit">
                {{ __('Ingresar') }}
            </button>
        </div>
    </form>
</x-guest-layout>
