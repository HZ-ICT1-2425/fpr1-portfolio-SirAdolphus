<x-layout.main>
<!------TODO: Fix formatting issues------>

<h1 class="mainSection niceYellow">
    Blog Posts
</h1>

<main>

    <div class="navbar-end">
        <a href="{{ route('posts.create') }}" class="styledButtonInverted">Create a New Blog Post</a>
    </div>
        @foreach($posts as $post)
            <x-blogs.blog-list :post="$post"></x-blogs.blog-list>
        @endforeach
</main>

</x-layout.main>
