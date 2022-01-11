
@extends('layouts.app')

@section('content')
@php
    $userid = Auth::user()->id;
@endphp
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Alta de blogs') }}</div>

                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">>
                            <strong>!Revise los campos!</strong>
                                @foreach ($errors->all() as $error)
                                    <span class="badge badge-danger">{{ $error }}</span>
                                @endforeach
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    {!! Form::open(['route' => ['blogs.store'], 'method' => 'POST'])!!}



                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 ">
                                <div class="form-group">
                                    <label for="name">UserId</label>
                                    <input type="text" name="user_id" id="user_id" class="form-control" value="{{$userid}}" readonly>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="name">Titulo</label>
                                    {!! Form::text('titulo', null, array('class' => 'form-control'))!!}
                                </div>
                            </div>



                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="name">Contenido</label>
                                        {!! Form::textarea('contenido', null, array('class' => 'form-control'))!!}
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 mt-1">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
