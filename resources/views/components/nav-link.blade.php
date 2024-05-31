<nav class="bg-violet-800 py-3">
    <div class=" block md:flex justify-between max-full xl:max-w-7xl xl:mx-auto mx-3">
        <div class="flex justify-between md:w-6/12 text-xl">
            <a href="{{route('index')}}" class="text-slate-100">Home</a>
            <span id="toggle">
                <img class="w-7  md:hidden" src="{{url('icons/menu.png')}}" alt="">
            </span>
        </div>
        
        <div id="navMobile" class="md:w-6/12 hidden md:block">
            <ul class="text-slate-100 block md:flex justify-items-center justify-end gap-x-4 text-xl">
                <li class="mb-1.5 md:my-0"><a href="{{route('productos')}}">Catalogo</a></li>
                @guest
                <li class="my-1.5 md:my-0"><a href="{{route('login')}}">Login</a></li>
                <li class="my-1.5 md:my-0"><a href="{{route('register')}}">Sing in</a></li>   
                @endguest

                @auth
                <li class="my-1.5 md:my-0"><a href="{{route('index')}}">Perfil</a></li>
                <form method="POST" action="{{route('logout')}}">
                    @csrf
                    <li class="my-1.5 md:my-0">
                        <a href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();";>Cerrar sesion</a>
                    </li>
                    
                </form>
                @endauth
                
               
                
                <li class="mt-1.5 md:my-0"><a href="">
                    <img class="w-7" src="{{url('icons/carrito-de-compras.png')}}" alt="">    
                </a></li>
            </ul>
        </div>
    </div>
    
</nav>