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
            <div class="bg-white shadow rounded py-3 px-4">

                <a href="{{ route('create.index') }}" class="btn btn-primary btn-lg">
                    <h1>Crear Fragancia</h1>
                </a>

                <a href="{{ route('list.index') }}" class="btn btn-success btn-lg float-right">
                    <h1>Ver Fragancias</h1>
                </a>
            </div>
        </div>
    </div>

</body>

</html>
