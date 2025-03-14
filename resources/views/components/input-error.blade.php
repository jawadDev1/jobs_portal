@props(['name'])

@error($name)
    <p {{ $attributes->merge(['class' => 'text-red-600 font-semibold text-sm mt-2']) }}> {{ $message }}</p>
@enderror
