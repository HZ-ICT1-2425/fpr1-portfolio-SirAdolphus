<section class="blog">
    <article class="article">
        <p class="articledate niceWhite">{!! $post->created_at !!}</p>
        <a class="articletitle niceYellow" href={{route('posts.show', $post)}}>{!! $post->title !!}</a>
        <p class="articlecontent niceWhite">{!! $post->slug !!}</p>
    </article>
</section>
