<x-guest-layout>

    <div class="py-10 bg-indigo-400">
        <div class="max-w-6xl mx-auto font-bold text-white ">
            <h1 class="text-2xl">{{$blog->title}}</h1>
        </div>
    </div>
{{--        {{$blog->slug}}--}}
    <div class="max-w-6xl mx-auto mt-8">

        {{$blog->content}}
    </div>
</x-guest-layout>
