<x-layout>
    <h1>{{ $name }}'s post</h1>
    @foreach ($posts as $post)
        <article>
            <h1> <a href="/post/{{ $post->id }}">{{ $post->title }}</a> </h1>
            <p>Post by {{ $post->user->name }} in <a
                    href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}</p>
        </article>

        <hr>
    @endforeach
</x-layout>
