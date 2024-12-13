@extends('template')

@section('title', 'Editar categoría')

@push('css')
    <style>
        #descripcion {
            resize: none;
        }
    </style>
@endpush

@section('content')
    <div class="px-4 container-fluid">
        <h1 class="mt-4 text-center">Editar Categoría</h1>
        <ol class="mb-4 breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('panel') }}">Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ route('categorias.index') }}">Categorías</a></li>
            <li class="breadcrumb-item active">Editar categoría</li>
        </ol>
        <div class="container p-4 mt-3 border rounded w-100 border-3 border-primary">
            <form action="{{ route('categorias.update', ['categoria' => $categoria]) }}" method="post">
                @method('PATCH')
                @csrf
                <div class="card-body">
                    <div class="row g-4">

                        <div class="col-md-6">
                            <label for="nombre" class="form-label">Nombre:</label>
                            <input type="text" name="nombre" id="nombre" class="form-control"
                                value="{{ old('nombre', $categoria->caracteristica->nombre) }}">
                            @error('nombre')
                                <small class="text-danger">{{ '*' . $message }}</small>
                            @enderror
                        </div>

                        <div class="col-md-12">
                            <label for="descripcion" class="form-label">Descripción:</label>
                            <textarea name="descripcion" id="descripcion" rows="3" class="form-control">{{ old('descripcion', $categoria->caracteristica->descripcion) }}</textarea>
                            @error('descripcion')
                                <small class="text-danger">{{ '*' . $message }}</small>
                            @enderror
                        </div>
                    </div>

                </div>
                <br>
                <div class="text-center card-footer">
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <button type="reset" class="btn btn-secondary">Reiniciar</button>
                </div>

            </form>
        </div>

    </div>
@endsection

@push('js')
@endpush
