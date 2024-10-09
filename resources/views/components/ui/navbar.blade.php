<nav class="border-[#1E1E2C] border-2 w-full py-[18px] ">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 flex justify-between items-center">
        <a class="text-white font-bold flex items-center gap-2">
            <x-ui.logo class="w-10"/>
            <span class="text-xl">FreelanceHours</span>
        </a>

        <!-- Menu Desktop -->
        <ul class="hidden md:flex text-[#C3C3D1] items-center gap-4 text-[16px]">
            <li class="hover:underline cursor-pointer"><a>Anunciar um projeto</a></li>
            <li class="hover:underline cursor-pointer"><a href="{{ route('projects.index') }}">Procurar um projeto</a></li>
            <li class="hover:underline cursor-pointer"><a>Como funciona?</a></li>
        </ul>

        <!-- Ícones e Menu Hamburguer -->
        <div class="flex items-center gap-4">
            <x-ui.icons.profile class="w-8 h-8"/>
            <!-- Ícone de menu hamburguer visível em dispositivos móveis -->
            <x-ui.icons.burguer class="w-8 h-8 md:hidden"/>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="md:hidden px-4 mt-2">
        <ul class="flex flex-col text-[#C3C3D1] text-[16px] gap-2">
            <li class="hover:underline cursor-pointer"><a>Anunciar um projeto</a></li>
            <li class="hover:underline cursor-pointer"><a href="{{ route('projects.index') }}">Procurar um projeto</a></li>
            <li class="hover:underline cursor-pointer"><a>Como funciona?</a></li>
        </ul>
    </div>
</nav>
