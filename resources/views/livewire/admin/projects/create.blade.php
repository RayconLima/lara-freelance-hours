<div>

    <button class="text-white float-right bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
        wire:click="$set('modal', true)">
        Novo
    </button>

    <x-ui.modal>
        <form class="flex flex-col gap-6 w-full" wire:submit="save">
            <div>
                <div class="text-[28px]">Novo Projeto</div>
                {{-- <div class="text-[16px] text-[#C3C3D1]">Faça sua oferta em horas mensais que você pode contribuir com o projeto.</div> --}}
            </div>
            <div class="mb-2">
                <label class="text-[14px] text-[#C3C3D1]">Título</label>
                <input wire:model="title" type="text" class="w-full bg-[#1E1E2C] text-white p-2 focus:outline-none focus:ring-0 border border-[#1E1E2C]" placeholder="Informe um título" />
                
                @error('title')
                <div class="text-red-600 mt-1 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-2">
                <label class="text-[14px] text-[#C3C3D1]">Descrição</label>
                <textarea wire:model="description" type="text" class="w-full bg-[#1E1E2C] text-white p-2 focus:outline-none focus:ring-0 border border-[#1E1E2C]" placeholder="Informe um título"></textarea>
                
                @error('description')
                <div class="text-red-600 mt-1 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-2">
                <label class="text-[14px] text-[#C3C3D1]">Data de encerramento</label>
                <input wire:model="ends_at" type="date" class="w-full bg-[#1E1E2C] text-white p-2 focus:outline-none focus:ring-0 border border-[#1E1E2C]" placeholder="Informe um título" value="{{ Carbon\Carbon::parse($ends_at)->format('Y-m-d') }}" />
                
                @error('ends_at')
                <div class="text-red-600 mt-1 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-2">
                <label for="default" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tecnologias</label>
                <select multiple wire:model="tech_stack" id="default" class="w-full bg-[#1E1E2C] text-white p-2 focus:outline-none focus:ring-0 border border-[#1E1E2C]">
                    <option class="text-[14px] text-[#C3C3D1]" selected>Selecione uma opção</option>
                    @foreach (App\Enums\TechnologyEnum::cases() as $technology)
                        <option class="text-[14px] text-[#C3C3D1]" value="{{ $technology->value }}">{{ $technology->name }}</option>
                    @endforeach
                </select>

                @error('tech_stack')
                <div class="text-red-600 mt-1 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button class="bg-[#5354FD] text-white font-bold tracking-wide uppercase px-8 py-3 rounded-[4px]
                    hover:bg-[#1f20a6] transition duration-300 ease-in-out w-full">
                Salvar
            </button>
        </form>
        <div class="flex justify-center space-x-2">
            <x-ui.icons.secure class="w-6 h-6 text-[#5354FD]" />
            <span>Suas informações estão seguras.</span>
        </div>
    </x-ui.modal>
</div>