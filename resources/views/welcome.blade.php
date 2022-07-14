<x-layout>
    @foreach ($posts as $post)
        <article>

            <h1> <a href="/post/{{ $post->id }}">{{ $post->title }}</a> </h1>

            <p>by <a href="/author/{{ $post->user_id }}">{{ $post->user->name }}</a></p>
            <p>{{ $post->excerpt }}</p>
        </article>

        <hr>
    @endforeach
</x-layout>
