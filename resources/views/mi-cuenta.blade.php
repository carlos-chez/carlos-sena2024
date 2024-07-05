@extends('layouts.app')
@section('contenido')

<div class= "grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 ">
<div class="hero bg-base-200 min-h-screen">
    <div class="hero-content flex-col lg:flex-row-reverse">
        <div class="text-center lg:text-left">
            
        <h1 class="text-5xl font-bold">Acceder!</h1>
        </div>
        <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
        <form class="card-body">
            <div class="form-control">
            <label class="label">
                <span class="label-text">Email</span>
            </label>
            <input type="email" placeholder="correo" class="input input-bordered" required />
            </div>
            <div class="form-control">
            <label class="label">
                <span class="label-text">Password</span>
            </label>
            <input type="password" placeholder="contraseña" class="input input-bordered" required />
            <label class="label">
                <a href="#" class="label-text-alt link link-hover"> ¿olvido contraseña?</a>
            </label>
            </div>
            <div class="form-control mt-6">
            <button class="btn btn-primary">ingresar</button>
            </div>
        </form>
        </div>
    </div>
    </div>


    <div class="hero bg-base-200 min-h-screen">
        <div class="hero-content flex-col lg:flex-row-reverse">
            <div class="text-center lg:text-left">
            <h1 class="text-5xl font-bold">Registrarse!</h1>
            </div>
            <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
            <form class="card-body">
                <div class="form-control">
                <label class="label">
                    <span class="label-text">Nombre de usuario</span>
                </label>
                <input type="email" placeholder="     " class="input input-bordered" required />
        </div>
            <div class="form-control">
            <div class="form-control">
                        <label class="label">
                            <span class="label-text">Direccion de correo electronico</span>
                        </label>
                        <input type="email" placeholder="    " class="input input-bordered" required />
                        </div>

                <label class="label">
                    <span class="label-text">contraseña</span>
                </label>

                <input type="password" placeholder="contraseña" class="input input-bordered" required />
                <label class="label">
                    <a href="#" class="label-text-alt link link-hover"> ¿olvido contraseña?</a>
                </label>
                </div>
                <div class="form-control mt-6">
                <button class="btn btn-primary">ingresar</button>
                </div>

                
            </form>
            </div>
        </div>
        </div>
    </div>
    @endsection
