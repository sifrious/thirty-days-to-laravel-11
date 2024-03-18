<x-layout>
    <x-slot:heading>This is an about page</x-slot:heading>
    <h1>Hello From the About Page</h1>
    
    @foreach ($jobs as $job)

    <li>
        <a href="/jobs/{{$job['id']}}">
        {{ $job['title'] }}: pays {{ $job['salary'] }} per year
    @endforeach
        </a>
    </li>
</x-layout>
