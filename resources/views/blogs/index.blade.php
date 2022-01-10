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
             <div class="container row justify-content-around">
                 <h2>Blogs</h2>
                 @if ($blogs->count() == 0)
                    <p>No hay blogs</p>
                    @else
                        @foreach($blogs as $blog)
                            <div class="card" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">{{$blog->titulo}}</h5>
                                    <p class="card-text">{{$blog->contenido}}</p>
                                    @can('editar-blog')
                                        <a href="{{route('blogs.edit', $blog->id)}}" class="btn btn-warning">Editar</a>
                                    @endcan
                                    @can('borrar-blog')
                                        {!! Form::open(['route' => ['blogs.destroy', $blog], 'method' => 'DELETE', 'class'=>"d-inline"]) !!}
                                        <button class="btn btn-danger " type="submit">Eliminar</button>
                                        {!! Form::close() !!}
                                    @endcan
                                </div>
                            </div>
                        @endforeach
                    @endif
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
