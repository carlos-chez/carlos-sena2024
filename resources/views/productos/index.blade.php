@extends('layouts.app')
@section('titulo','consultar productos')
@section('contenido')  
    <div class= "grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 m-6"> 
        @foreach ($productos as $producto)
        <div class="card w-60 bg-base-100 shadow-xl">
                <figure><img src="https://loremflickr.com/200/200/store&{{ $producto->nombre }}" alt="{{ $producto->nombre }}" /></figure>
                <div class="card-body"> 
                    <h2 class="card-title">
                        {{ $producto->nombre}}
                        <div class="bagde badge-secondary text-xs">${{$producto->precio}}</div>
                </h2>
                <p>{{ Str::limit($producto->descripcion,50) }}</p>
                <div class="card-actions justify-end">
                    <a href="{{ route('productos.edit', $producto->id) }}"class="btn btn-xs btn-primary">Editar</a>
                    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <BUtton type="submit" class="btn btn-xs btn-error">Eliminar</BUtton>
                    </form>
            </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection