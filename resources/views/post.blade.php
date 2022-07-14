<x-layout>

    <h1>{{ $post->title }}</h1>

    <p>Post by <a href="/author/{{ $post->user_id }}">{{ $post->user->name }}</a> in <a
            href="/categories/{{ $post->category->slug }}">
            {{ $post->category->name }}</a>
    </p>

    <div>
        {!! $post->body !!}
    </div>
</x-layout>
