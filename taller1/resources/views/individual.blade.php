<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Taller1</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>


    <div class="row align-items-center justify-content-center vh-100">
        <div class="col-12 col.sm-10 col-lg-8 mx-auto">
            <div class="bg-white shadow rounded py-3 px-4">
                <a class="btn btn-warning" href="{{ route('home') }}"><---</a>
                <h1 class="display-4 text-center">FRAGANCIA {{$fragance->id}}</h1>
                    <hr>
                    <br>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Descripción</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>

                            <td>{{ $fragance->name }}</td>
                            <td>{{ $fragance->category }}</td>
                            <td>{{ $fragance->price }}</td>
                            <td>{{ $fragance->description }}</td>
                        </tr>

                    </tbody>
                </table>
                <br>
                <div class="col-12 col.sm-10 col-lg-3 mx-auto">
                    <form action="{{ route('delete_fragance', $fragance->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-lg">Borrar</button>
                        <a href="{{ route('list.index') }}" class="btn btn-primary btn-lg float-right">
                            Volver
                        </a>
                    </form>


                </div>
            </div>
        </div>

    </div>
</body>

</html>
