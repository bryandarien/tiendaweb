<x-app-layout>
    <x-nav-link/>
    <div class="text-center">
        <h1>Catalogo</h1>
    </div>
        
        <form id="s" action="#" class="mx-auto my-4 md:max-w-lg w-52">
            @csrf
                <input name="nombreProducto" class="rounded-md h-2 w-full" type="search">  
                <input id="search" type="submit"  value="Buscar">
        </form>
    <div id="tableProduct" class="grid grid-cols-2  md:grid-cols-3  lg:grid-cols-4  grid-row-3 max-w-screen-lg container mx-auto">
        
    </div>
    
</x-app-layout>
