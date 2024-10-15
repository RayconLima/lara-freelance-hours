<div>
<button 
  type="button"
  class="float-right focus:outline-none text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-900">
  Novo
</button>
<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
  <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
    <tr>
      <th scope="row" class="px-6 py-3">  
        Título
      </th>
      <th scope="row" class="px-6 py-3">  
        Autor
      </th>
      <th scope="row" class="px-6 py-3">  
        Data de encerramento
      </th>
      <th scope="row" class="px-6 py-3">  
        Status
      </th>
      <th scope="row" class="px-6 py-3">  
        Tecnologias
      </th>
      <th scope="row" class="px-6 py-3"></th>
    </tr>
  </thead>
  <tbody>
    @foreach($projects as $project)
      <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">  

          {{ $project->title }}
        </th>
        <td class="px-6 py-4">
          {{ $project->author->name }}
        </td>
        <td class="px-6 py-4">
          {{ $project->created_at->diffForHumans() }}
        </td>
        <td class="px-6 py-4">
          {{ $project->status }}
        </td>
        <td class="px-6 py-4">
          {{ implode(', ', $project->tech_stack) }}
        </td>
        <td class="px-6 py-4">
          <button 
            type="button"
            wire:click="destroy({{ $project->id }})"
            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
            Excluir
          </button>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
</div>