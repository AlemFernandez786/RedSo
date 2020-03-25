@extends('layouts.plantilla_perfil')
 @section("titulo")
  RedSo - Perfil
  @endsection
 



        @section('foto')<img src= "/storage/foto_perfil/{{$usuarioLogueado->id}}/{{$usuarioLogueado->foto_perfil}}"> @endsection
        
        @section('usuario'){{$usuarioLogueado->usuario}} @endsection
       
        @section('nombre'){{$usuarioLogueado->nombre}}@endsection
        @section('apellido') {{$usuarioLogueado->apellido}}@endsection
        @section('ciudad') {{$usuarioLogueado->ciudad}}@endsection
        @section('fecha_nacimiento'){{$usuarioLogueado->cumpleanios}}@endsection
      
      @section('posteos')
     <h2>Posteos</h2>
     
     @forelse($posteos as $posteo)
     <div class="post">
       <h3 class="Usuario">{{$usuarioLogueado->usuario}}</h3>
       <hr>
     <p class="post-text">{{$posteo['contenido']}}</p>
     </div>
    @empty  
    <div class="post">
      <h3 class="Usuario">No hiciste ningun posteo</h3>
      <hr>
    <p class="post-text">Haz tu primer <a href="/home">posteo</a>!!</p>
    
    </div>  
    @endforelse
    {{$posteos->links()}}
   @endsection


   @section('amigos')
     <div class="seguidores segleft">
      <h2 class="amigos-title">{{$usuarioLogueado->seguidos->count()}} <b>Seguidos</b> </h2><br>
      <ul class="lista-amigos">
        @forelse($usuarioLogueado->seguidos->take(7) as $seguido)
      <li><img src="/img/chico.png">{{$seguido['usuario']}}</li><hr> 
      @empty 
      Este usuario no sigue a nadie 
      @endforelse
      </ul>
      <a href="/busquedaUser"><button type="button" class="btn btn-primary busqueda">Ver seguidos</button></a>  
      <a href="/busquedaUser"><button type="button" class="btn btn-primary busqueda">Buscar usuarios</button></a>


    </div> <br> 

    <div class="seguidores ">
      <h2 class="amigos-title">{{$usuarioLogueado->seguidores->count()}} <b>Seguidores</b> </h2><br>
      <ul class="lista-amigos">
        @forelse($usuarioLogueado->seguidores->take(7) as $seguidor)
        <li><img src="/img/chico.png">{{$seguidor['usuario']}}</li><hr>
        @empty 
        Este usuario no tiene seguidores
        @endforelse
      </ul> 
      <button type="button" class="btn btn-primary busqueda">Ver seguidores</button> 
    </div>
   @endsection
 </div>
 
   