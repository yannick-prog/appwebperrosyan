@extends('base')
@section('title', 'Perros web - Añadir')

@section('content')

    <!-- Modal -->
    <div class="modal fade" id="modalPerro" tabindex="-1" aria-labelledby="modalPerroLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalPerroLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
            </div>
        </div>
    </div>

    <section class="row" id="app">

        {{storage_path('app/perros/Y-si-tu-perro-pudiera-vivir-cien-anos.jpg')}}

            <div class="card col-sm-12 col-mg-10 col-lg-5 mx-auto">
                <h5 class="card-header">Añadir perro</h5>
                <div class="card-body">
                    <form method="post" action="{{route('añadirperro.store')}}" enctype="multipart/form-data" id="formPerro">
                        @csrf
                        <div class="mb-3 row">
                            <label for="inputNombre" class="col-sm-3 col-form-label">Foto</label>
                            <div class="col-sm-10 col-md-5 col-lg-9">
                                <input v-on:change="file=true" v-bind:class="isInvalidFile()" name="foto_perro" type="file" id="inputNombre">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputNombre" class="col-sm-3 col-form-label">Nombre</label>
                            <div class="col-sm-10 col-md-5 col-lg-9">
                                <input v-model="nombre" v-bind:class="isInvalidName()" type="text" name="nombre" class="form-control" id="inputNombre">
                            </div>

                            <div v-if="nombre.length<3" class="invalid-feedback text-end d-block">
                                Escribe un nombre con mas de 2 letras
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="selectRaza" class="col-sm-3 col-form-label">Raza</label>
                            <div class="col-sm-10 col-md-5 col-lg-9">
                                <select class="form-select" name="raza" aria-label="Default select example" id="selectRaza">
                                    <!--<option selected>Open this select menu</option>-->
                                    @foreach($razas as $raza)
                                        <option value="{{ $raza->id }}"> {{ $raza->nombre_raza }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="d-flex justify-content-evenly px-5">
                            @foreach($tamanos as $key=>$tamano)
                                <input type="radio" class="btn-check" name="tamanos" id="tamano{{$tamano->id}}" value="{{$tamano->id}}"  autocomplete="off" @if($key==1) {{'checked'}} @endif>
                                <label class="btn btn-outline-info" for="tamano{{$tamano->id}}">{{$tamano->tamaño}}</label>
                            @endforeach
                        </div>
                        <br>
                        <div class="d-flex justify-content-evenly px-5">
                            @foreach($colores as $key=>$color)
                                <input type="checkbox" class="btn-check" name="colores[]" id="color{{$color->id}}" value="{{$color->id}}" autocomplete="off">
                                <label class="btn btn-outline-light" for="color{{$color->id}}">{{$color->color_pelo}}</label>
                            @endforeach
                        </div>


                        <br><br>
                        <button class="btn btn-success w-100" id="envForm" :disabled=isDisabled()>Enviar</button>
                    </form>
                </div>
            </div>

    </section>

@endsection

@section('scripts')

    <script>

        const app = Vue.createApp({
            data() {
                return {
                    nombre: "",
                    file: false,
                    isInvalid: 'is-invalid form-control',
                    isValid: 'form-control',
                    count: 0,
                }
            },
            methods: {
                isInvalidFile() {
                    if (this.file)
                        return this.isValid
                    else
                        return this.isInvalid

                },
                isInvalidName() {
                    if(this.nombre.length<3)
                        return this.isInvalid
                    else
                        return this.isValid
                },
                isDisabled() {
                    if(this.nombre.length >= 3 && this.file)
                        return false
                    else
                        return true
                }
            }
        })

        app.mount('#app')

    </script>

    <script>
        $(function(){
            $("#formPerro").on("submit", function(e){
                e.preventDefault();

                var formData = new FormData(document.getElementById("formPerro"));

                $.ajax({
                    url: "/guardarperro",
                    type: "post",
                    dataType: "html",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false
                })

                    .done(function(res){
                        //console.log(typeof (res))
                        let info = jQuery.parseJSON(res);
                        console.log(info.img);
                        $("#modalPerroLabel").text('El perro ' + info.nombre + " se ha añadido!")
                        //$(".modal-body").html("<figure src='"+ info.img +"'></figure>")

                        $("#modalPerro").modal('show')


                        //$("#formPerro").after().html("<section id='perroSubidoMsj'>El perro " + res + "se ha añadido correctamete</section>");
                    });

            });
        });
    </script>
@endsection

