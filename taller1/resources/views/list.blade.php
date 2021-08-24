<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>Taller1</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <div class="row align-items-center justify-content-center vh-100">
        <div class="col-12 col.sm-10 col-lg-6 mx-auto">
            <div class="bg-white shadow rounded py-3 px-4">
                <a class="btn btn-warning" href="{{ route('home') }}"><---</a>
                <h1 class="display-4 text-center">FRAGANCIAS</h1>
                <hr>
                <br>
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        @foreach ($fragances->reverse() as $fragance)
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                        </tr>
                        @break
                        @endforeach
                    </thead>
                    <tbody>
                        @php
                            $n = 1;
                        @endphp

                        @foreach ($fragances->reverse() as $fragance)
                            <tr>
                                @if ($n <= 2)
                                    <td scope="row"><a style="text-decoration: none"
                                            href="{{ route('list.show', $fragance->id) }}"><strong><u>{{ $fragance->id }}
                                                </u></strong></a>
                                    </td>
                                

                                @else
                                    <td scope="row"><a style="text-decoration: none"
                                            href="{{ route('list.show', $fragance->id) }}">{{ $fragance->id }}</a>
                                    </td>
                                @endif
                                <td>{{ $fragance->name }}</td>
                            </tr>
                            @php
                                $n++;
                            @endphp
                        @endforeach
                    </tbody>

                </table>
                <br>
                <div class="text-center">
                    <a href="{{ route('create.index') }}" class="btn btn-success btn-lg btn-block">
                        Añadir nueva
                    </a>
                </div>
                {{-- <div class="d-flex justify-content-center">
                    {!! $fragances->links() !!}
                </div> --}}
            </div>
        </div>

    </div>
</body>

</html>
