<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <h1 class="display-4 text-secondary ms-2">
                <img src="{{ asset('imgs/logo.jpg') }}" alt="{{ config('app.name') }}" width="93" class="d-inline-block align-text-top rounded-3 border border-secondary">
                {{ config('app.name') }}
            </h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto me-4">
                <li class="nav-item my-1">
                    <a
                        v-bind:class="[{active:dataFieldClass('perros.show', '{{Route::currentRouteName()}}')}, navButtonClass, 'me-3']"
                        href="{{ route('perros.show') }}">
                         Ver perros
                    </a>
                </li>
                <li class="nav-item my-1">
                    <a v-bind:class="[{active:dataFieldClass('añadirperro.create', '{{Route::currentRouteName()}}')}, navButtonClass]"
                       href="{{ route('añadirperro.create') }}">
                        Añadir Perro
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>

