<x-layout>
    <x-breadcrumbs class="mb-4"
        :links="['My Job Applications' => '#']" />

    @forelse ($applications as $application)
        <x-job-card :job="$application->job">
            <div class="flex itms-center justify-between text-sm text-slate-500">
                <div>
                    <div>
                        Applied {{ $application->created_at->diffForHumans() }}
                    </div>
                    <div>
                        Other {{Str::plural('application', $application->job->job_applications_count - 1) }}
                        {{ $application->job->job_applications_count - 1 }}
                    </div>
                    <div>
                    Your asking salary: ${{ number_format($application->expected_salary) }}
                    </div>
                    <div>
                        Average asking salary: ${{ number_format($application->job->job_applications_avg_expected_salary) }}
                    </div>
                </div>
            </div>
            
        </x-job-card>
    @empty

    @endforelse
</x-layout>