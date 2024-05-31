<x-app-layout>
    <x-nav-link/>
    <div class="max-w-screen-lg container mx-auto">
       
        <div class="  md:flex  ">
            <div class="w-2/4 mx-auto">
                <img class="w-96 mx-auto" src={{asset($producto->nombreImage)}} alt=""> 
            </div>
            <div class="w-2/4 my-auto  ">
                <div class="my-5">
                    <h1 class="text-3xl"> {{$producto->nombreProducto}} </h1>
                </div>  
                <div>
                    <span>precio: {{$producto->precio}} </span>
                </div>
                <div>
                    <span>stock: {{$producto->stock}} </span>
                </div>

                <form action="">
                    @csrf
                    <input class="p-2 my-2 bg-violet-800 text-slate-100 rounded-md" type="submit" value="Añadir al carrito">
                </form>
            </div>
        </div>

        <div>
            <h2 class="text-2xl">Descripcion</h2>
            <p>{{$producto->descripcion}}</p>
        </div>
    </div>
    
</x-app-layout>
