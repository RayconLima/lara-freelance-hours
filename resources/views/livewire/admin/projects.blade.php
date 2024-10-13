<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                Título
            </th>
            <th scope="col" class="px-6 py-3">
                Autor
            </th>
            <th scope="col" class="px-6 py-3">
                Data de encerramento
            </th>
            <th scope="col" class="px-6 py-3">
                Status
            </th>
            <th scope="col" class="px-6 py-3">
                Tecnologias
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($this->projects as $project)
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
        </tr>
        @endforeach
    </tbody>
</table>