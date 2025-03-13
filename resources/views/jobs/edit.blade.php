<x-layout>



    <x-slot:heading>
        Edit Job {{ $job->titles }}
    </x-slot:heading>


    <form action="/jobs/{{ $job->id }}" method="POST" class="text-white">
        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">


                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="name" class="block text-sm/6 font-medium ">Name</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6">
                                </div>
                                <input type="text" name="name" id="name"
                                    class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-950  placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                    placeholder="Uzumaki Naruto" required value="{{ $job->name }}">
                            </div>
                            @error('name')
                                <p class="text-red-600 font-semibold text-sm mt-2"> {{ $message }}</p>
                            @enderror

                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm/6 font-medium ">Title</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6">
                                </div>
                                <input type="text" name="title" id="title"
                                    class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-950  placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                    placeholder="Software Engineering" value="{{ $job->title }}" required>
                            </div>
                            @error('title')
                                <p class="text-red-600 font-semibold text-sm mt-2"> {{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm/6 font-medium ">Salary</label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                                <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6">
                                </div>
                                <input type="text" name="salary" id="salary"
                                    class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-950 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                    placeholder="$1200" value="{{ $job->salary }}" required>
                            </div>
                            @error('salary')
                                <p class="text-red-600 font-semibold text-sm mt-2"> {{ $message }}</p>
                            @enderror
                        </div>
                    </div>






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
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>



</x-layout>
