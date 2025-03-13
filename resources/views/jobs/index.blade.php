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


    <div class="my-8 text-white space-y-4 ">

        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block py-4 px-3 border border-gray-300 shadow rounded">
                <div>
                    <span class="font-bold text-blue-600">
                        {{ $job->employer->name }}
                    </span>
                </div>
                <h2> <strong> {{ $job['title'] }} </strong> :Pays {{ $job['salary'] }}</h2>
            </a>
        @endforeach

    </div>

    <div>
        {{ $jobs->links() }}

    </div>

</x-layout>
