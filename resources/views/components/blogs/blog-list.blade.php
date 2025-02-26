<section class="blog">
    <article class="article">
        <p class="articledate niceWhite">{!! $blog->created_at !!}</p>
        <a class="articletitle niceYellow" href={{route('blogs.show', $blog)}}>{!! $blog->title !!}</a>
        <p class="articlecontent niceWhite">{!! $blog->slug !!}</p>
    </article>
</section>
