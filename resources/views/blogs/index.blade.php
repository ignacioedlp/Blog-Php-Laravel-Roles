@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @can('crear-blog')
            <div class="m-3">
                <a href="{{ route('blogs.create') }}" class="btn btn-primary">Crear Blog</a>
            </div>
            @endcan
             <div class="card mb-3">
                <div class="row justify-content-center p-3">
                <div class="card-header mb-3">
                 <h2>Blogs</h2>
                 @if ($blogs->count() == 0)
                    <p>No hay blogs</p>
                    @else
                    <div class="card-group">
                        @foreach($blogs as $blog)
                            <div class="card m-1 p-2">
                                    <div class="card-body">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-heading" viewBox="0 0 16 16">
                                            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                            <path d="M3 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0-5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-1z"/>
                                        </svg>
                                        <h4>{{$blog->titulo}}</h4>
                                        <p class="card-text ">{{$blog->user->name}}</p>
                                    </div>
                                    <div class="card-footer">
                                            @can('editar-blog')
                                                <a href="{{route('blogs.edit', $blog->id)}}" class="btn btn-warning">Editar</a>
                                            @endcan
                                            @can('borrar-blog')
                                                {!! Form::open(['route' => ['blogs.destroy', $blog], 'method' => 'DELETE', 'class'=>"d-inline"]) !!}
                                                    <button class="btn btn-danger " type="submit">Eliminar</button>
                                                {!! Form::close() !!}
                                            @endcan
                                            <a href="{{route('blogs.show', $blog->id)}}" class="btn btn-success">Ver</a>
                                        </div>
                                    </div>
                            </div>
                        @endforeach
                    @endif
                    </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
</div>


                {{-- <div class="card-body">
                    @can('crear-blog')
                        <a href="{{ route('blogs.create') }}" class="btn btn-primary">Crear Blog</a>
                    @endcan --}}

                    {{-- <table class="table table-striped mt-2">
                        <thead class="">
                            <th scope="col">Titulo</th>
                            <th scope="col">Contenido</th>
                            <th scope="col">Acciones</th>
                        </thead>
                        <tbody>

                            @foreach($blogs as $blog)

                            <tr>
                                <td >{{$blog->titulo}}</td>
                                <td >{{$blog->contenido}}</td>
                                <td >
                                    @can('editar-blog')
                                        <a href="{{route('blogs.edit', $blog->id)}}" class="btn btn-warning">Editar</a>

                                    @endcan
                                    @can('borrar-blog')
                                    {!! Form::open(['route' => ['blogs.destroy', $blog], 'method' => 'DELETE', 'class'=>"d-inline"]) !!}
                                        <button class="btn btn-danger " type="submit">Eliminar</button>
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                     <div class="pagination justify-content-end">
                        {!! $blogs->links() !!}}
                    </div> --}}



        </div>
    </div>
</div>
@endsection
