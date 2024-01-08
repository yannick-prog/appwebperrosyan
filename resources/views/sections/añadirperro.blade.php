@extends('base')
@section('title', 'Perros web - Añadir')
@section('css')
    <link href="{{ asset('css/typeradiostyle.css') }}" rel="stylesheet">
@endsection
@section('content')

    <section class="row">

            <div class="card col-sm-12 col-mg-10 col-lg-5 mx-auto">
                <h5 class="card-header">Añadir perro</h5>
                <div class="card-body">
                    <form action="">
                        @csrf
                        <div class="mb-3 row">
                            <label for="inputNombre" class="col-sm-3 col-form-label">Foto</label>
                            <div class="col-sm-10 col-md-5 col-lg-9">
                                <input class="form-control" type="file" id="inputNombre">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputNombre" class="col-sm-3 col-form-label">Nombre</label>
                            <div class="col-sm-10 col-md-5 col-lg-9">
                                <input type="text" class="form-control" id="inputNombre">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="selectRaza" class="col-sm-3 col-form-label">Raza</label>
                            <div class="col-sm-10 col-md-5 col-lg-9">
                                <select class="form-select" aria-label="Default select example" id="selectRaza">
                                    <!--<option selected>Open this select menu</option>-->
                                    @foreach($razas as $raza)
                                        <option value="{{ $raza->id }}"> {{ $raza->nombre_raza }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="tamaño_perro">
                            @foreach($tamaños as $key=>$tamaño)
                                <label id="tamañoRadio{{$key+1}}" class="default_radio @if($key==0){{'checked_radio'}}@endif" v-on:click="changeCssChecked">
                                    <input type="radio" name="tamaño" value="{{ $tamaño->tamaño  }}" @if($key==0){{'checked'}}@endif>
                                    {{ $tamaño->tamaño  }}
                                </label>
                            @endforeach
                        </div>
                        <br><br>
                        <a class="btn btn-success mx-auto" id="envForm">Enviar</a>
                    </form>
                </div>
            </div>


            <p>@{{ razas.status }}</p>

    </section>

@endsection

@section('scripts')
    <script>
/*
        const app = Vue.createApp({
            methods: {
                changeCssChecked() {
                    //for(i=1;i<=;i++){
                        //document.getElementById("tamañoRadio"+i).className = "default_radio checked_radio";
                    //}
                }
            }
        })
        app.mount('.tamaño_perro')
*/

        /*
        const section = Vue.createApp({
            import { ref } from 'vue';
            data() {
                return {
                    razas: null
                }
            },
            methods: {
                getRazas() {

                    const response = fetch("https://dog.ceo/api/breeds/list/all");
                    this.razas = response;
                }
            },
            beforeMount() {
                this.getRazas();

            },


        })
        section.mount('section')

         */

    </script>
@endsection

