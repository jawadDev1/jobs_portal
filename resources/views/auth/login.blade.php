<x-layout>
    <x-slot:heading>
        Log In
    </x-slot:heading>


    <form action="/login" method="POST" class="text-white">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">


                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">



                    <x-form-field>
                        <x-label for="email">
                            Email
                        </x-label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">

                                <x-input :value="old('email')" type="text" name="email" id="email" type="email"
                                    placeholder="example@gmail.com" required />
                            </div>
                            <x-input-error name="email" />

                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-label for="password">
                            Password
                        </x-label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">

                                <x-input type="text" name="password" id="password" type="password"
                                    placeholder="******" required />
                            </div>
                            <x-input-error name="password" />

                        </div>
                    </x-form-field>



                </div>
            </div>

        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm/6 font-semibold ">Cancel</a>
            <x-form-button>
                Log In
            </x-form-button>
        </div>
    </form>



</x-layout>
