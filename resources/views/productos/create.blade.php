@extends('layouts.app')
@section('titulo','consultar productos')
@section('cabecera', 'crear producto')

@section('contenido')
    <div class="flex justify-center my-6"> 
        <div class="card w-96 shadow-2xl bg-base-100"> 
            <div class="card-body">
                <form action="{{ route('productos.store') }}"method="POST">
                    @csrf
                    {{--Nombre--}}
                    <div>
                        <label for="nombre" class="label">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="input input-bordered" placeholder="Nombre del producto" required />
                    </div>
                    {{--Descripcion--}}
                    <div>
                        <label for="descripcion" class="label">Descripcion</label>
                        <input name="descripcion" id="descripcion" class="textarea textarea-bordered" placeholder="Descripcion del producto" />
                    </div>
                    {{--Precio--}}
                    <div>
                        <label for="precio" class="label">Precio</label>
                        <input type="number" name="precio" id="precio" class="input input-bordered" placeholder="Precio del producto" required />
                    </div>
                    {{--Stock--}}
                    <div>
                        <label for="stock" class="label">Stock</label>
                        <input type="number" name="stock" id="stock" class="input input-bordered" placeholder="Stock del producto" required />
                    </div>
                    {{--Boton guardar--}}
                    <button type="submit" class="btn btn-primary"> crear producto</button>
                </form>
            </div>
        </div>
    </div>
@endsection