<x-layout>
    <x-slot:heading>
        Jobs Listings
    </x-slot:heading>

    <x-Typography.heading id="heading" />

    <h1 class="text-xl text-white">Jobs Page</h1>


    <button class="bg-blue-500 rounded p-2 text-white">
        <a href="/">
            Go to Home</a>
    </button>


    <ul class="my-8">

        @foreach ($jobs as $job)
            <li class="text-xl text-white">
                <a href="/jobs/{{ $job['id'] }}">
                    <strong> {{ $job['title'] }} </strong> :Pays {{ $job['salary'] }}
                </a>
            </li>
        @endforeach

    </ul>

</x-layout>
