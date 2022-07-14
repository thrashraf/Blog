<x-layout>
    <h1>Post of categories</h1>
    @foreach ($categories as $category)
        <ul>
            <li> <a href="/categories/{{ $category->slug }}">
                    {{ $category->name }}</a></li>
        </ul>

        <hr>
    @endforeach
</x-layout>
