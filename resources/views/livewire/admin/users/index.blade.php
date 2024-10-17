<div>
  <div class="flex justify-between mb-2">
    <input type="text" wire:model.live="search">
    {{-- <livewire:admin.projects.create /> --}}
  </div>
  <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
      <tr>
        <th scope="row" class="px-6 py-3">  
          Nome
        </th>
        <th scope="row" class="px-6 py-3">  
          E-mail
        </th>
        <th scope="row" class="px-6 py-3">Avaliação</th>
        {{-- <th scope="row" class="px-6 py-3"></th> --}}
      </tr>
    </thead>
    <tbody>
      @foreach($this->users as $user)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700" wire:key="{{ $user->id }}">
          <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">  
            {{ $user->name }}
          </th>
          <td class="px-6 py-4">
            {{ $user->email }}
          </td>
          <td class="px-6 py-4 flex">
            @foreach(range(1, $user->rating) as $star)
                <x-ui.icons.star class="h-[14px] mr-1"/>
            @endforeach
          </td>
          {{-- <td class="px-6 py-4 flex justify-between"> --}}
            {{-- <a 
              href="{{ route('admin.projects.show', $project->id) }}" 
              wire:navigate
              class="focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900" 
            >
                Mostrar
            </a> --}}
            {{-- <livewire:admin.projects.update :$project /> --}}
            {{-- <button 
              type="button"
              wire:click="destroy({{ $project->id }})"
              class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
              Excluir
            </button> --}}
          {{-- </td> --}}
        </tr>
      @endforeach
    </tbody>
  </table>
</div>