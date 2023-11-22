<x-layout>
    <x-breadcrumbs :links="['Jobs' => route('jobs.index') ]" class="mb-4" />
    <x-card class="mb-4 text-sm">
        <div class="mb-4 grid grid-cols-2 gap-4">
            <div>
                <div class="mb-1 font-semibold">Suche</div>
                <x-text-input placeholder="Suche" name="search" value="" />
            </div>
            <div>
                <div class="mb-1 font-semibold">Gehalt</div>
                <div class="flex space-x-2">
                    <x-text-input placeholder="Von" name="min_salary" value="" />
                    <x-text-input placeholder="Bis" name="max_salary" value="" />

                </div>
            </div>
            <div>3</div>
            <div>4</div>
        </div>
    </x-card>
    @foreach($jobs as $job)
        <x-job-card class="mb-4" :$job>
            <div>
                <x-link-button :href="route('jobs.show', $job)">
                    Mehr erfahren
                </x-link-button>
            </div>
        </x-job-card>
    @endforeach
</x-layout>
