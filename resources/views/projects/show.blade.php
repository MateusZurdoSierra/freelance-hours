<x-layouts.app>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 w-full py-[40px]">
        <div class="col-span-2">
            <livewire:projects.show :project="$project" />
        </div>
        <div class="col-span-1">
            <livewire:projects.proposals :project="$project" />
        </div>
    </div>
</x-layouts.app>
