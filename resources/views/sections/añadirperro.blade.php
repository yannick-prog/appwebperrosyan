@extends('base')
@section('title', 'Perros web - Añadir')
@section('content')
    <section>
        <form method="POST" action="/enviarFormContacto">
            @csrf
            <div class="card">
                <h5 class="card-header">Featured</h5>
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a class="btn btn-success mx-auto" id="envForm" @click="getRazas">Enviar</a>
                </div>
            </div>
            
            <p>@{{ razas.status }}</p>
        </form>
    </section>

@endsection

@section('scripts')
    <script>
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






    </script>
@endsection

