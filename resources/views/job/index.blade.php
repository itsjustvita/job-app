<x-layout>
    <x-breadcrumbs :links="['Jobs' => route('jobs.index') ]" class="mb-4" />
    <x-card class="mb-4 text-sm">
        <div class="mb-4 grid grid-cols-2 gap-4">
            <div>1</div>
            <div>2</div>
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
