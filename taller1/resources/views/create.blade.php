<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Taller 1</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <div class="row align-items-center justify-content-center vh-100">
        <div class="col-12 col.sm-10 col-lg-6 mx-auto">
            <form class="bg-white shadow rounded py-3 px-4" action="{{ route('add_fragance') }}" method="POST">
                @csrf
                <div class="container">
                    <a class="btn btn-warning" href="{{ route('home') }}"><---</a>
                    <h1 class="display-4 text-center">FRAGANCIA</h1>
                    <hr>
                    @if (session('success'))
                        <li>{{ session('success') }}</li>
                    @endif
                    <br>

                    <div class="form-group">

                        <input type="text" class="form-control" name="name" placeholder="Nombre" required="true">

                    </div>

                    <div class="form-group">

                        <select type="text" class="form-control" name="category" placeholder="Categoria"
                            required="true">
                            <option value="Sin categoria">Sin categoria</option>
                            <option value="Deportiva">Deportiva</option>
                            <option value="Casual">Casual</option>
                            <option value="Elegante">Elegante</option>
                        </select>

                    </div>

                    <div class="form-group">

                        <input type="number" class="form-control" name="price" placeholder="Precio" required="true">

                    </div>

                    <div class="form-group">

                        <textarea type="text" class="form-control" name="description" placeholder="Descripción"
                            required="true"></textarea>

                    </div>

                    <br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success btn-lg btn-block">
                            Agregar
                        </button>
                        <br>
                        <br>
                        <a href="{{ route('list.index') }}" class="btn btn-primary btn-lg">
                            Ver Fagancias
                        </a>
                    </div>
                    <br>
                </div>

            </form>
        </div>
    </div>
</body>

</html>
