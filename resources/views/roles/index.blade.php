@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard Roles') }}</div>

                <div class="card-body">
                    @can('crear-rol')
                        <a href="{{ route('roles.create') }}" class="btn btn-primary">Crear Rol</a>
                    @endcan

                    <table class="table table-striped mt-2">
                        <thead class="">
                            <th scope="col">Rol</th>
                            <th scope="col">Acciones</th>
                        </thead>
                        <tbody>
                            @foreach($roles as $rol)
                            <tr>
                                <td >{{$rol->name}}</td>
                                <td >
                                    @can('editar-rol')
                                        <a href="{{route('roles.edit', $rol->id)}}" class="btn btn-warning">Editar</a>

                                    @endcan
                                    @can('borrar-rol')
                                    {!! Form::open(['route' => ['roles.destroy', $rol->id], 'method' => 'DELETE', 'class'=>"d-inline"]) !!}
                                        <button class="btn btn-danger " type="submit">Eliminar</button>
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                     <div class="pagination justify-content-end">
                        {!! $roles->links() !!}}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
