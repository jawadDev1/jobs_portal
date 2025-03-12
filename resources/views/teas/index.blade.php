
<x-layout>

<h1 class="text-2xl text-white">Tese page</h1>

<ul class="text-white flex flex-col gap-5">

    @foreach ($teas as $tea)
        <a href="/teas/{{$tea['id']}}">
            {{ $tea['name']}}
        </a>
    @endforeach

</ul>

</x-layout>