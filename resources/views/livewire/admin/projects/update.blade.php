@props(['project'])
<div>
    <button class="focus:outline-none text-white bg-orange-700 hover:bg-orange-800 focus:ring-4 focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-orange-600 dark:hover:bg-orange-700 dark:focus:ring-orange-900"
        wire:click="$set('modal', true)">
        Atualizar
    </button>

    <x-ui.modal>
        <form class="flex flex-col gap-6 w-full" wire:submit="save">
            <div>
                <div class="text-[28px]">Atualizar Projeto</div>
            </div>
            <div class="mb-2">
                <label class="text-[14px] text-[#C3C3D1]">Título</label>
                <input wire:model="title" value="{{ old('title', $project->title) }}" type="text" class="w-full bg-[#1E1E2C] text-white p-2 focus:outline-none focus:ring-0 border border-[#1E1E2C]" placeholder="Informe um título" />
                
                @error('title')
                <div class="text-red-600 mt-1 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-2">
                <label class="text-[14px] text-[#C3C3D1]">Descrição</label>
                <textarea wire:model="description" type="text" class="w-full bg-[#1E1E2C] text-white p-2 focus:outline-none focus:ring-0 border border-[#1E1E2C]" placeholder="Informe um título">
                    {{ old('description', $project->description) }}
                </textarea>
                
                @error('description')
                <div class="text-red-600 mt-1 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-2">
                <label class="text-[14px] text-[#C3C3D1]">Data de encerramento</label>
                <input wire:model="ends_at" value="{{ old('ends_at', $project->ends_at) }}" type="date" class="w-full bg-[#1E1E2C] text-white p-2 focus:outline-none focus:ring-0 border border-[#1E1E2C]" placeholder="Informe um título" value="{{ Carbon\Carbon::parse($ends_at)->format('Y-m-d') }}" />
                
                @error('ends_at')
                <div class="text-red-600 mt-1 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-2">
                <label for="default" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tecnologias</label>
                <select multiple wire:model="tech_stack" value="{{ old('tech_stack') ?? $this->project->technologies->pluck('id')->implode(',') }}" id="default" class="w-full bg-[#1E1E2C] text-white p-2 focus:outline-none focus:ring-0 border border-[#1E1E2C]">
                    <option class="text-[14px] text-[#C3C3D1]" selected>Selecione uma opção</option>
                    @foreach ($technologies as $technology)
                        <option class="text-[14px] text-[#C3C3D1]" value="{{ $technology->id }}">{{ $technology->label }}</option>
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