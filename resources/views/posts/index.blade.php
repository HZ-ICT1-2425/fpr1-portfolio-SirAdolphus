<x-layout.main>
<!------TODO: Fix formatting issues------>

<h1 class="mainSection niceYellow">
    Blog Posts
</h1>

<main>

    <div class="navbar-end">
        <a href="{{ route('blogs.create') }}" class="button is-primary">Create a New Blog Post</a>
    </div>
        @foreach($blogs as $blog)
            <x-blogs.blog-list :blog="$blog"></x-blogs.blog-list>
        @endforeach
</main>

</x-layout.main>
