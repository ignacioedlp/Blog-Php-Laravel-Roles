@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar usuarios') }}</div>

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

                    {!! Form::model($user, ['route' => ['usuarios.update', $user->id], 'method' => 'PATCH', 'files' => true])!!}
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="name">Nombre</label>
                                    {!! Form::text('name', null, array('class' => 'form-control'))!!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="name">E-mail</label>
                                    {!! Form::text('email', null, array('class' => 'form-control'))!!}
                                </div>
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="avatar">Avatar</label>
                                    {!! Form::file('avatar', array('class' => 'form-control my-1'))!!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    {!! Form::password('password', array('class' => 'form-control'))!!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="confirm-password">Confirmar password</label>
                                    {!! Form::password('confirm-password', array('class' => 'form-control'))!!}
                                </div>
                            </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 d-none">
                                <div class="form-group ">
                                    <label for="">Roles</label>
                                    {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control')) !!}
                                </div>
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="instagram">Instagram</label>
                                    {!! Form::text('instagram', null, array('class' => 'form-control'))!!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="github">Gitgub</label>
                                    {!! Form::text('github', null, array('class' => 'form-control'))!!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="website">Website</label>
                                    {!! Form::text('website', null, array('class' => 'form-control'))!!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="ocupacion">Ocupacion</label>
                                    {!! Form::text('ocupacion', null, array('class' => 'form-control'))!!}
                                </div>
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="linkedin">LinkedIn</label>
                                    {!! Form::text('linkedin', null, array('class' => 'form-control'))!!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="twitter">Twitter</label>
                                    {!! Form::text('twitter', null, array('class' => 'form-control'))!!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="facebook">Facebook</label>
                                    {!! Form::text('facebook', null, array('class' => 'form-control'))!!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    {!! Form::text('phone', null, array('class' => 'form-control'))!!}
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    {!! Form::text('address', null, array('class' => 'form-control'))!!}
                                </div>
                            </div>


                            <div class="col-xs-12 col-sm-12 col-md-12 mt-1">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
