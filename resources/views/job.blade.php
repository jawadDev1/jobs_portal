<x-layout>



    <x-slot:heading>
        {{ $job['name'] }}
    </x-slot:heading>

    <h1 class="text-xl text-white">
       Job: {{ $job['job'] }}
    </h1>

    <p class="text-lg text-white">
        This job pays {{ $job['salary'] }}
    </p>

</x-layout>
