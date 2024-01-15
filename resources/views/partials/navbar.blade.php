<header class="py-8 px-6">

    <div class="container my-0 mx-auto transition-all duration-200">
        <div class="flex justify-between items-center">
            <h1 class="text-white text-3xl font-bold">Fabio Dev</h1>
            <menu class=" gap-12 items-center hidden md:flex">
                <li>
                    <a href="/">Home</a>
                </li>
                <li>
                    <a href="#portfolio">Portfolio</a>
                </li>
                <li>
                    <a href="/">About</a>
                </li>
            </menu>
            @auth
                <a href={{ route('dashboard') }}
                    class="bg-[#eb4432] text-[#171923] text-xl hover:bg-[#d86154] transition-colors duration-400  py-2 pt-1 px-5 rounded-lg">
                    DashBoard
                </a>
            @else
                <a href={{ route('login') }}
                    class="bg-[#eb4432] text-[#171923] text-xl hover:bg-[#d86154] transition-colors duration-400  py-2 pt-1 px-5 rounded-lg">
                    Login
                </a>
            @endauth

        </div>

    </div>

</header>
