<nav class="bg-cor1 p-4" id="header">
    <div class="container mx-auto flex justify-between items-center relative">
        <div class="text-white text-lg font-semibold">
            <a href="{{ url('/') }}">Senpai</a>
      
            
        </div>
        <div class="lg:hidden" >
            <button id="menu-toggle" class="text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        <div id="menu" class="fixed top-0 right-0 bg-cor1 p-4 w-64 h-full lg:w-auto lg:h-auto lg:static lg:flex lg:items-center lg:space-x-6 transform translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out">
            <button id="menu-close" class="absolute top-4 right-4 lg:hidden text-white text-3xl cursor-pointer">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            <ul class="space-y-4 lg:space-y-0 lg:flex lg:space-x-6">
                <li><a href="{{ url('/') }}" class="block py-2 lg:py-0 text-white">Home</a></li>
                <li><a href="{{url('page')}}" class="block py-2 lg:py-0 text-white">About</a></li>
                <li><a href="{{url('page2')}}" class="block py-2 lg:py-0 text-white">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
