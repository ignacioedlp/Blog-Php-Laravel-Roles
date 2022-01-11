@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Usuarios') }}</div>

                <div class="card-body">
                    @can('crear-usuario')
                        <a  class="btn btn-primary" href="{{route('usuarios.create')}}">Nuevo</a>
                        <a href="{{route('usuarios.pdf')}}" class="btn btn-success">Crear PDF</a>
                    @endcan



                    <table class="table table-responsive mt-2">
                        <thead class="">
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Email</th>
                            <th scope="col">Rol</th>
                            <th scope="col">Acciones</th>
                        </thead>
                        <tbody>
                            @foreach($usuarios as $usuario)
                            <tr>
                                <td >{{$usuario->id}}</td>
                                <td>{{$usuario->name}}</td>
                                <td>{{$usuario->email}}</td>
                                <td>
                                    @if(!empty($usuario->getRoleNames()))
                                        @foreach ($usuario->getRoleNames() as $roleName)
                                            {{$roleName}}
                                        @endforeach
                                    @endif
                                </td>
                                <td >
                                    @can('editar-usuario')
                                        <a href="{{route('usuarios.edit', $usuario->id)}}" class="btn btn-warning">Editar</a>
                                    @endcan
                                    @can('borrar-usuario')
                                    {!! Form::open(['route' => ['usuarios.destroy', $usuario->id], 'method' => 'DELETE', 'class'=>"d-inline"]) !!}
                                        <button class="btn btn-danger " type="submit">Eliminar</button>
                                    {!! Form::close() !!}
                                    @endcan
                                    @can('inspeccionar-usuario')
                                        <a href="{{route('usuarios.show', $usuario->id)}}" class="btn btn-success">Ver</a>
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="pagination justify-content-end">
                        {!! $usuarios->links() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
