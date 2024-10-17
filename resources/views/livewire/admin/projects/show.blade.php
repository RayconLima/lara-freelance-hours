@props(['project'])
<div>
  <x-ui.card class="mb-4 bg-[#10101e]">
    <div class="px-4 sm:px-0 flex justify-between">
      <h3 class="text-base font-semibold leading-7 text-white uppercase">{{ $project->title }}</h3>
      <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">
        <x-projects.status :status="$project->status"/>
      </p>
    </div>
    <div class="mt-6 border-t border-gray-100">
      <dl class="divide-y divide-gray-100">
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
          <dt class="text-sm font-medium leading-6 text-white uppercase">Título</dt>
          <dd class="mt-1 text-sm leading-6 text-white sm:col-span-2 sm:mt-0">{{ $project->title }}</dd>
        </div>
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
          <dt class="text-sm font-medium leading-6 text-white uppercase">Descrição</dt>
          <dd class="mt-1 text-sm leading-6 text-white sm:col-span-2 sm:mt-0">{{ $project->description }}</dd>
        </div>
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
          <dt class="text-sm font-medium leading-6 text-white uppercase">Criado por</dt>
          <dd class="mt-1 text-sm leading-6 text-white sm:col-span-2 sm:mt-0">{{ $project->author->name }}</dd>
        </div>
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
          <dt class="text-sm font-medium leading-6 text-white uppercase">Publicado</dt>
          <dd class="mt-1 text-sm leading-6 text-white sm:col-span-2 sm:mt-0">{{ $project->created_at->diffForHumans() }}</dd>
        </div>
        <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
          <dt class="text-sm font-medium leading-6 text-white uppercase">Encerra</dt>
          <dd class="mt-1 text-sm leading-6 text-white sm:col-span-2 sm:mt-0">{{ $project->ends_at->diffForHumans() }}</dd>
        </div>
      </dl>
    </div>
  </x-ui.card>
  <hr />
  
  <x-ui.card class="mt-4 bg-[#10101e]">
  <div class="px-4 sm:px-0 flex justify-between">
    <h3 class="mb-4 text-base font-semibold leading-7 text-white uppercase">Propostas</h3>
  </div>
  <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
      <tr>
        <th scope="row" class="px-6 py-3">  
          E-mail
        </th>
        <th scope="row" class="px-6 py-3">  
          Horas
        </th>
        <th scope="row" class="px-6 py-3 flex justify-center">  
          Posição
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach($project->proposals as $proposal)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700" wire:key="{{ $proposal->id }}">
          <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">  
            {{ $proposal->email }}
          </th>
          <td class="px-6 py-4">
            {{ $proposal->hours }} Horas
          </td>
          <td class="px-6 py-4 flex justify-center">
            {{ $proposal->position }}
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  </x-ui.card>
</div>