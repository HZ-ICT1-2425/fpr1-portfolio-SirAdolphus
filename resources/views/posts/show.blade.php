<x-layout.main>
    <section class="mainSection">
        <h1 class="niceYellow">{!! $blog->title !!}</h1>
        <h2 class="niceYellow">{!! $blog->slug !!}</h2>
    </section>
    <section class="secondarySection">
        <p class="niceWhite">{!! $blog->body !!}</p>
    </section>
</x-layout.main>
