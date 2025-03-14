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

    <div class="mt-6 space-x-4">

        @can('edit', $job)
            <x-button href="/jobs/{{ $job->id }}/edit" class="">
                Update
            </x-button>

            <button form="delete-form" type="submit" class="bg-red-600 text-white py-2 px-3">
                Delete
            </button>
        @endcan



    </div>

    <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>

</x-layout>
