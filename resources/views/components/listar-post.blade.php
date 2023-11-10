<div>


    @if ($posts->count())


<div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
    @foreach ($posts as $post)
        <div>
            <a href="{{ route('posts.show', ['post' => $post, 'user' => $post->user]) }}">
                <img src="{{ asset('uploads') . '/' . $post->imagen }}"
                    alt="imagen del post {{ $post->titulo }}">
            </a>
        </div>
    @endforeach
</div>


<div class="my-5">
    {{ $posts->links() }}
</div>


@else
    <p class="text-center">No hay post, sigue a alguien para poder ver sus post</p>
@endif



</div>


