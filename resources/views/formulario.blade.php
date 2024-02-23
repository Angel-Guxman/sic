
@extends('welcome')
@section('titulo')
Login
@endsection
@section('contenido')
    
<div class="flex min-h-screen justify-center items-center bg-gray-100">
    <form action="{{url('alumnos')}}" method="POST" class=" flex flex-col min-w-[500px] border-black border-[2px] pt-10 registrar bg-neutral-50">
        @csrf
        <h2 class=" flex justify-center text-3xl font-medium">Registrar</h2>
        
            <label for="" class=" flex flex-col mt-7 ml-8 mr-8">
                Nombre
                <input type="text" name="name_student" placeholder="Nombre" value="{{old('name_student')}}" class=" border-black border-[1px] rounded-md h-10 mt-1 p-2">
                @error('name_student')
                <div style="color: red">
                    {{$message}}  
                </div>
                @enderror
            </label>
      <label class=" flex flex-col  mt-7 ml-8 mr-8" for="">
        Matricula

          <input type="text" name="id_student" placeholder="Matrícula" class=" border-black border-[1px] rounded-md h-10 mt-1 p-2">
        </label >
        <label for="" class=" flex flex-col mt-7 ml-8 mr-8">
            Correo
            <input type="text"name="email_student" placeholder="Correo" class=" border-black border-[1px] rounded-md h-10 mt-1 p-2">
            @error('email_student')
            <div class=" text-cyan-300" >
                {{$message}}
            </div>
            @enderror
        </label>
        <label for="" class=" flex flex-col mt-7 ml-8 mr-8">
            Contraseña
            <input type="text" name="password_student" placeholder="Contraseña" class=" border-black border-[1px] rounded-md h-10 mt-1 p-2">
        </label>
        <div class=" flex flex-col items-center justify-center mt-7 mb-4 text-center"></button>

            <button type="submit" class=" border-black border-[2px] rounded-md p-2 " >Registrar</button>
        </div>
        
    </form>
</div>
    @endsection