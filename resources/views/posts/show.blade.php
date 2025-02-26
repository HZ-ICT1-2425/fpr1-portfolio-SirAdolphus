<x-layout.main>
    <section class="mainSection">
        <h1 class="niceYellow">{!! $post->title !!}</h1>
        <h2 class="niceYellow">{!! $post->slug !!}</h2>
    </section>
    <section class="secondarySection">
        <p class="niceWhite">{!! $post->body !!}</p>
    </section>
        <section class="buttonContainer">
            <a href="{{ route('posts.edit', $post) }}" class="styledButtonInverted">Edit this post</a>
            <section>
                <form method="POST" action="{{route('posts.destroy')}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="styledButtonInverted"> Delete Post</button>
                </form>
            </section>
        </section>
</x-layout.main>
