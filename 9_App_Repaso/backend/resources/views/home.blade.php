@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <table>
                        {{-- Ponemos los encabezados de la tabla --}}
                        <thead>

                            <tr>
                                <th class="text-center px-4">Id</th>
                                <th class="text-center px-4">Nombre</th>
                                <th class="text-center px-4">Apellido</th>
                                <th class="text-center px-4">Edad</th>
                                <th class="text-center px-4">Hora ingreso</th>
                                <th class="text-center px-4">Acompañantes</th>
                            </tr>
                        </thead>

                        {{-- Ponemos los datos de la tabla --}}
                        <tbody>
                            @foreach ($guests as $guest)
                                <tr>
                                    <td class="text-center px-4">{{ $guest->id }}</td>
                                    <td class="text-center px-4">{{ $guest->name }}</td>
                                    <td class="text-center px-4">{{ $guest->last_name }}</td>
                                    <td class="text-center px-4">{{ $guest->age }}</td>
                                    <td class="text-center px-4">{{ $guest->hour }}</td>
                                    <td class="text-center px-4">{{ $guest->companions }}</td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
