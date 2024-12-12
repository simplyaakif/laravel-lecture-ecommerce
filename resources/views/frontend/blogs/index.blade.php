<x-guest-layout>

    <div class="py-10 bg-indigo-400">
        <div class="max-w-6xl mx-auto font-bold text-white ">
        <h1 class="text-2xl">Blogs</h1>
        </div>
    </div>
    <div class="max-w-6xl mx-auto mt-8">
<ul class="grid grid-cols-4 gap-4">
    @foreach($blogs as $blog)
        <li>
            <a href="{{route('blogs.show',$blog)}}">
            {{$loop->index +1 }} {{$blog->title}}
            </a>
        </li>
    @endforeach
</ul>
</div>
</x-guest-layout>
