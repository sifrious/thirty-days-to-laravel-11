<x-layout>
    <x-slot:heading>Job Listing</x-slot:heading>
    <h1>{{ $job['title'] }}</h1>

    @if($job['salary'] == null)
    <p>Could not find listing. It may have expired and been removed.</p>
    @else
    <p>This position pays ${{ $job['salary'] }} per year.</p>
    @endif
    
</x-layout>
