<x-layout>
    <x-slot:heading>This is an about page</x-slot:heading>
    <h1>{{ $job['title'] }}</h1>

    <p>This position pays ${{ $job['salary'] }} per year.</p>
</x-layout>
