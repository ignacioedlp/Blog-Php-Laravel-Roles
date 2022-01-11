
@extends('layouts.app')

@section('content')
<div class="container " >
    <div class="card">
        <img class="card-img-top h-25" src="/img/Blogs/{{$blog->image}}" alt="Card image cap">
        <div class="card-body">
            <div>
                <div class="header ">
                    <h1>{{$blog->titulo}}</h1>
                </div>
                {{-- //blog content --}}
                <div class="">
                    <p>{{$blog->contenido}}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
