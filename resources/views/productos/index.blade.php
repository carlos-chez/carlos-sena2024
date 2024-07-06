@extends('layouts.app')
@section('titulo','consultar productos')
@section('contenido')  
    <div class= "grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 m-6"> 
        @foreach ($productos as $producto)
        <div class="card w-60 bg-base-100 shadow-xl">
                <figure><img src="https://source.unsplash.com/random/800x600/?technology&{{ $producto->nombre}}" alt="{{ $producto->nombre }}"/></figure>
                <div class="card-body"> 
                    <h2 class="card-title">
                        {{ $producto->nombre}}
                        <div class="bagde badge-secondary text-xs">${{$producto->precio}}</div>
                </h2>
                <p>{{ Str::limit($producto->descripcion,50) }}</p>
                <div class="card-actions justify-end">
                    <div class= "badge badge-outline">stock:{{$producto->stock}} </div>
                    <div class= "badge badge-outline">tech</div>
            </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection