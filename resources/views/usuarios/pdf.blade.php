
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="">
    <div class="row justify-content-center">
        <div class="table-responsive-lg">
        <table class="table table-bordered ">
            <thead class="">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Rol</th>
                <th scope="col">Address</th>
                <th scope="col">Phone</th>
            </tr>
            </thead>
            <tbody>
                @foreach($usuariosSorted as $usuario)
                <tr>
                    <td class="">{{$usuario->id}}</td>
                    <td class="">{{$usuario->name}}</td>
                    <td class="">{{$usuario->email}}</td>
                    <td class="">
                        @if(!empty($usuario->getRoleNames()))
                            @foreach ($usuario->getRoleNames() as $roleName)
                                {{$roleName}}
                            @endforeach
                        @endif
                    </td>
                    <td class="">{{$usuario->address}}</td>
                    <td class="">{{$usuario->phone}}</td>

                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>

</body>
</html>
