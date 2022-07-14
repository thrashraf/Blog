<x-layout>
    <h1>{{ $category }}</h1>
    @foreach ($posts as $post)
        <article>
            <h1> <a href="/post/{{ $post->id }}">{{ $post->title }}</a> </h1>
            <p>{{ $post->excerpt }}</p>
        </article>

        <hr>
    @endforeach
</x-layout>
