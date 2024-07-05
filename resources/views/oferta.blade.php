@extends('layouts.app')
@section('titulo','oferta')
@section('contenido')  
    <div class= "grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 m-9"> 
        @foreach ($productos as $producto)
        <div class="card bg-base-100 w-90 shadow-xl">
            <figure class="px-10 pt-10">
                <img
                src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg"
                alt="Shoes"
                class="rounded-xl" />
            </figure>
            <div class="card-body items-center text-center"> 
                <h2 class="card-title">{{$producto['nombre'] }}</h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions">
                <button class="btn btn-primary"> ${{$producto['precio'] }} </button>
                </div>
            </div>
            </div>
        @endforeach
    </div>
    @endsection