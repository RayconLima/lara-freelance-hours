<x-layouts.app title="Anunciar projeto">
<!-- Main Section with Two Columns -->
    <section class="h-screen flex items-center justify-center">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">

                <!-- Column 1: Text -->
                <div class="text-center md:text-left">
                    <h1 class="text-4xl font-bold text-white mb-6">Anunciar um Novo Projeto</h1>
                    <p class="text-lg text-gray-300 mb-6">Para criar um novo projeto, é necessário estar logado em sua conta.</p>


                    @if(Auth::user())
                        <a href="{{ route('admin.projects.index') }}" class="bg-blue-500 text-white font-semibold py-2 px-6 rounded-lg hover:bg-blue-600 transition-colors">
                            Anunciar
                        </a>
                    @else
                        <a href="/login" class="bg-blue-500 text-white font-semibold py-2 px-6 rounded-lg hover:bg-blue-600 transition-colors">
                            Fazer Login
                        </a>
                    @endif

                    <p class="mt-4 text-gray-400">Ainda não tem uma conta? <a href="/register" class="text-blue-400 hover:underline">Registre-se aqui</a></p>
                </div>

                <!-- Column 2: Image -->
                <div class="flex justify-center">
                    <img src="/screenshots/new_project.png" alt="Formulário para cadastrar um novo projeto" class="rounded-lg shadow-md">
                </div>

            </div>
        </div>
    </section>
</x-layouts.app>
