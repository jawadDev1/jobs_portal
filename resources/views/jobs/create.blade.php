<x-layout>



    <x-slot:heading>
        Create Job
    </x-slot:heading>


    <form action="/jobs" method="POST" class="text-white">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">


                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field class="sm:col-span-4">
                        <x-label for="name">
                            Name
                        </x-label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">

                                <x-input type="text" name="name" id="name" placeholder="Uzumaki Naruto"
                                    required />
                            </div>
                            <x-input-error name="name" />

                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-label for="title">
                            Title
                        </x-label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">

                                <x-input type="text" name="title" id="title" placeholder="CEO" required />
                            </div>
                            <x-input-error name="title" />

                        </div>
                    </x-form-field>
                    <x-form-field>
                        <x-label for="salary">
                            Salary
                        </x-label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">

                                <x-input type="text" name="salary" id="salary" placeholder="$3299" required />
                            </div>
                            <x-input-error name="salary" />

                        </div>
                    </x-form-field>







                </div>
            </div>

            {{-- @if ($errors->any())
                <ul class="space-y-4">
                    @foreach ($errors->all() as $error)
                        <li class="text-red-600 text-sm">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif --}}




        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold ">Cancel</button>
            <x-form-button>
                Create
            </x-form-button>
        </div>
    </form>



</x-layout>
