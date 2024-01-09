@extends('base')
@section('title', 'Perros web - Añadir')

@section('content')

    <section class="row" id="app">

        @if(count($perros_todos)>0)
        <table class="table table-dark table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Foto</th>
                <th scope="col">Nombre</th>
                <th scope="col">Raza</th>
                <th scope="col">Tamaño</th>
                <th scope="col">Colores</th>
            </tr>
            </thead>
            <tbody>

            @foreach($perros_todos as $key=>$perro_data)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td><img src="{{storage_path('app/perros/'.$perro_data->img)}}" alt="{{$perro_data->img}}"></td>
                    <td>{{$perro_data->nombre}}</td>
                    <td>{{$perro_data->nombre_raza}}</td>
                    <td>{{$perro_data->tamaño}}</td>
                    <td>{{$perro_data->img}}</td>
                </tr>
            @endforeach

        </table>

        @else
            <article>No hay perros</article>
        @endif

    </section>

@endsection

@section('scripts')

    <script>



    </script>
@endsection
