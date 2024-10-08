<x-layouts.app :title="$project->title">
    <div class="grid grid-cols-3 gap-6">
        <livewire:projects.show :$project />

        <livewire:projects.proposals :$project />
    </div>
</x-layouts.app>