@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-xl-4">
                            <div class="card bg-primary">
                                 <div class="card-body">
                                    <h4>Usuarios</h4>
                                    <h2 class="text-left">
                                        @php
                                            use App\Models\User;
                                            $cant_users = User::count();
                                        @endphp
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                    </svg>
                                    <span>{{$cant_users}}</span></h2>
                                    <p class="m-b-0 text-right"><a href="/usuarios" class="text-white">Ver mas</a></p>
                                </div>
                            </div>
                        </div>

                         <div class="col-md-4 col-xl-4">
                            <div class="card bg-warning">
                                 <div class="card-body">
                                    <h4>Roles</h4>
                                    <h2 class="text-left">
                                        @php
                                            use Spatie\Permission\Models\Role;
                                            $cant_roles = Role::count();
                                        @endphp
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                    </svg>
                                    <span>{{$cant_roles}}</span></h2>
                                    <p class="m-b-0 text-right"><a href="/usuarios" class="text-white">Ver mas</a></p>
                                </div>
                            </div>
                        </div>

                         <div class="col-md-4 col-xl-4">
                            <div class="card bg-success">
                                 <div class="card-body">
                                    <h4>Blogs</h4>
                                    <h2 class="text-left">
                                        @php
                                            use App\Models\Blog;
                                            $cant_blogs = Blog::count();
                                        @endphp
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                    </svg>
                                    <span>{{$cant_blogs}}</span></h2>
                                    <p class="m-b-0 text-right"><a href="/usuarios" class="text-white">Ver mas</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
