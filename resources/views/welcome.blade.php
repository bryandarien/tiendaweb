<x-app-layout>
    <x-nav-link/>
    <div>
        <div class="text-center my-4">
            <h1 class="text-4xl">Todo lo que deseas al alcanze de un click</h1>
        </div>
    </div>
    <section class="mt-10">
        <div class="container mx-auto max-w-screen-lg">
            <h2 class="ms-5">Productos en oferta</h2>
        </div>
        <div class="grid grid-cols-2  md:grid-cols-3  lg:grid-cols-4  grid-row-3 max-w-screen-lg container mx-auto">
            @foreach ($lowPrecio as $low)
            <x-items-products  nombreProducto="{{$low->nombreProducto}}" productoImagen="{{asset($low->nombreImage)}}" objproducto="{{route('productos.show',$low)}}"/> 
            @endforeach
        </div>
    </section>

    <section class="mt-10">
        <div class="container mx-auto max-w-screen-lg">
            <h2 class="ms-5">Ultimos productos agregados</h2>
        </div>
        <div class="grid grid-cols-2  md:grid-cols-3  lg:grid-cols-4  grid-row-3 max-w-screen-lg container mx-auto">
            @foreach ($lastDate as $last)
            <x-items-products  nombreProducto="{{$last->nombreProducto}}" productoImagen="{{asset($last->nombreImage)}}" objproducto="{{route('productos.show',$last)}}"/> 
            @endforeach
        </div>
    </section>
</x-app-layout>   