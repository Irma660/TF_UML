<x-app-layout>
    <x-slot name="header">
    @php
        $hora = date('H', strtotime(Auth::user()->updated_at)); // Aquí asumimos que 'updated_at' es la hora de registro o acceso del usuario
        $saludo = '';

        if ($hora >= 5 && $hora < 12) {
            $saludo = 'BUENOS DÍAS';
        } elseif ($hora >= 12 && $hora < 18) {
            $saludo = 'BUENAS TARDES';
        } else {
            $saludo = 'BUENAS NOCHES';
        }
    @endphp

    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
    {{ $saludo }}, {{ Auth::user()->name }}
</h2>
    </x-slot>

    <div class="flex justify-center mt-4 space-x-4">
    <a href="#alumno" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded flex flex-col items-center">
    <img src="assets/img/colegial.png" alt="Agregar Alumno" class="h-12 w-12 mb-3"> <!-- Ajusta la clase "h-12 w-12" para cambiar el tamaño de la imagen y "mb-2" para agregar margen inferior -->
    <span class="text-sm">Alumnos</span>
</a>
</a>

                        <a href="#docente" class="bg-green-500 hover:bg-green-700 text-white font-bold py-3 px-6 rounded flex flex-col items-center">
                            <img src="ruta/a/tu/imagen_docente.png" alt="Agregar Docente" class="mr-2"> Agregar Docentes
                        </a>

                        <a href="#cursos" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-3 px-6 rounded flex flex-col items-center">
                            <img src="ruta/a/tu/imagen_usuario.png" alt="Agregar Usuario" class="mr-2"> Agregar Usuarios
                        </a>
                        <a href="#usuarios" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-3 px-6 rounded flex flex-col items-center">
                            <img src="ruta/a/tu/imagen_otro.png" alt="Otro botón" class="mr-2"> Otro Botón
                        </a>

                        <a href="#reportes" class="bg-red-500 hover:bg-red-700 text-white font-bold py-3 px-6 rounded flex flex-col items-center">
                            <img src="ruta/a/tu/imagen_otro_mas.png" alt="Otro botón más" class="mr-2"> Otro Botón Más
                        </a>

                        <a href="#otro" class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-3 px-6 rounded flex flex-col items-center">
                            <img src="ruta/a/tu/imagen_otro_otro.png" alt="Otro botón otro" class="mr-2"> Otro Botón Otro
                        </a>
                    </div>

    <div class="mt-8">
                        <label for="notas" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Notas:</label>
                        <textarea id="notas" name="notas" rows="4" class="mt-1 p-2 w-full border rounded-md shadow-sm focus:outline-none focus:border-blue-500 dark:bg-gray-700 dark:text-white"></textarea>
                    </div>
   
</x-app-layout>
