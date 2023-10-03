<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center">

        <h1> Registro de usuarios </h1>

        <form action="{{ route('usuarios.store') }}" method="POST">

            {{-- Para evitar ataques de seguridad --}}
            @csrf
            
            {{-- Campo para ingresar el nombre --}}
            <label for="name" class="mt-4"> Ingrese su nombre:
                <input type="text" name="name" id="name" placeholder="Nombre" class="form-control">
            </label>
            
            {{-- Campo para ingresar el apellido --}}
            <label for="last_name" class="mt-4"> Ingrese su apellido:
                <input type="text" name="last_name" id="last_name" placeholder="Apellido" class="form-control">
            </label>

            {{-- Campo para ingresar el telefono || name -> debe ir de acuerdo al Backend--}}
            <label for="phone_number" class="mt-4"> Ingrese su telefono:
                <input type="number" name="phone_number" id="phone_number" placeholder="Telefono" class="form-control">
            </label>

            {{-- Campo para ingresar el email --}}
            <label for="email" class="mt-4"> Ingrese su telefono:
                <input type="email" name="email" id="email" placeholder="Email" class="form-control">
            </label>

            {{-- Campo para ingresar el contraseña --}}
            <label for="password" class="mt-4"> Ingrese su contraseña:
                <input type="password" name="password" id="password" placeholder="Contraseña" class="form-control">
            </label>

            {{-- Campo para ingresar el confirmar contraseña --}}
            <label for="password_confirmation" class="mt-4"> Confirme su contraseña:
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Email" class="form-control">
            </label>

            <br>

            <button type="submit" class="btn btn-primary">Enviar</button>

        </form>
    </div>

    <div>
        <table>

            <thead>
                {{-- Encabezados de las columnas en la tabla --}}
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Opciones</th>
                </tr>
            </thead>

            <tbody>
                {{-- Para mostrar cada uno de los usuarios que hay en la bd --}}
                @foreach ($users as $user)
                    <tr>
                        {{-- Estoy mostrando el nombre de usuario del campo name de la bd --}}
                        <td> {{ $user->name }} </td>
                        <td> {{ $user->last_name }} </td>
                        <td> {{ $user->email }} </td>
                        <td>
                            {{-- Formulario para borrar usuarios --}}
                            {{-- le estoy enviando el id al método destroy del controlador --}}
                            <form action="{{ route('usuarios.destroy', $user->id) }}" method="POST">
                                {{-- Esto es un token --}}
                                @csrf
                                {{-- Le estamos diciendo a Laravel que es una petición de tipo DELETE --}}
                                @method('DELETE')
                                {{-- Boton para apuntar al metodo destroy --}}
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                            {{-- Boton para apuntar al metodo update --}}
                            <a href="{{ route('usuarios.edit', $user->id) }}" class="btn btn-warning">Editar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>