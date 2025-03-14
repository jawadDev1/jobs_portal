<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>


    <form action="/register" method="POST" class="text-white">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">


                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field class="sm:col-span-4">
                        <x-label for="first_name">
                            First Name
                        </x-label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">

                                <x-input type="text" name="first_name" id="first_name" placeholder="Uzumaki"
                                    required />
                            </div>
                            <x-input-error name="first_name" />

                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-label for="last_name">
                            Last Name
                        </x-label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">

                                <x-input type="text" name="last_name" id="last_name" placeholder="Naruto" required />
                            </div>
                            <x-input-error name="last_name" />

                        </div>
                    </x-form-field>


                    <x-form-field>
                        <x-label for="email">
                            Email
                        </x-label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">

                                <x-input type="text" name="email" id="email" type="email"
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

                    <x-form-field>
                        <x-label for="password_confirmation">
                            Confirm Password
                        </x-label>
                        <div class="mt-2">
                            <div
                                class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">

                                <x-input type="text" name="password_confirmation" id="password_confirmation"
                                    type="password" placeholder="******" required />
                            </div>
                            <x-input-error name="password_confirmation" />

                        </div>
                    </x-form-field>

                </div>
            </div>

        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm/6 font-semibold ">Cancel</a>
            <x-form-button>
                Register
            </x-form-button>
        </div>
    </form>



</x-layout>
