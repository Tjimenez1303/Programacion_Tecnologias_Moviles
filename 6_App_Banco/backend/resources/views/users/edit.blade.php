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

        <h1>Editar Usuario</h1>

        <form action="{{ route('usuarios.update',$user->id) }}" method="POST">
            @csrf
            @method('PUT')

            {{-- Para evitar ataques de seguridad --}}
            @csrf
            
            {{-- Campo para ingresar el nombre --}}
            <label for="name" class="mt-4"> Ingrese su nombre:
                <input type="text" name="name" id="name" placeholder="Nombre" class="form-control" value="{{ $user->name}}">
            </label>
            
            {{-- Campo para ingresar el apellido --}}
            <label for="last_name" class="mt-4"> Ingrese su apellido:
                <input type="text" name="last_name" id="last_name" placeholder="Apellido" class="form-control"  value="{{ $user->last_name}}">
            </label>

            {{-- Campo para ingresar el telefono --}}
            <label for="phone_number" class="mt-4"> Ingrese su telefono:
                <input type="number" name="phone_number" id="phone_number" placeholder="Telefono" class="form-control" value="{{ $user->phone_number}}">
            </label>

            {{-- Campo para ingresar el email --}}
            <label for="email" class="mt-4"> Ingrese su telefono:
                <input type="email" name="email" id="email" placeholder="Email" class="form-control"  value="{{ $user->email}}">
            </label>

            {{-- Campo para ingresar el contraseña || hidden -> es para que no se muestre --}}
            <label hidden for="password" class="mt-4"> Ingrese su contraseña:
                <input hidden type="password" name="password" id="password" placeholder="Contraseña" class="form-control">
            </label>

            {{-- Campo para ingresar el confirmar contraseña || hidden -> es para que no se muestre --}}
            <label hidden for="password_confirmation" class="mt-4"> Confirme su contraseña:
                <input hidden type="password" name="password_confirmation" id="password_confirmation" placeholder="Email" class="form-control">
            </label>

            <br>

            <button type="submit" class="btn btn-primary">Enviar</button>

        </form>
    </div>


</body>
</html>