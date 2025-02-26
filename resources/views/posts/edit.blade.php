<x-layout.main>

    <div class="mainSection">
        <form action="{{ route('posts.update', $post) }}" method="POST">
            @csrf
            @method('PUT')
            <h1 class="niceYellow">Edit Blog Post {{ $post->id }}</h1>
            <br>
            <h2 class="niceWhite">Please fill out all the form fields and click 'Submit'</h2>

            <div class="secondarySection">
                <label for="title" class="niceYellow">Title</label>
                <div>
                    <input type="text" name="title" placeholder="Enter the post's title..."
                           value="{{ old('title', $post) }}" autocomplete="title" autofocus>
                    @error('title')
                    <span>
                        <i></i>
                    </span>
                    @enderror
                </div>
                @error('title')
                <p class="niceWhite">{{ $message }}</p>
                @enderror
            </div>

            <div class="secondarySection">
                <label for="excerpt" class="niceYellow">Excerpt</label>
                <div>
                    <x-ui.wysiwyg name="slug" height="120"
                                  placeholder="Enter the blog post's summary..."
                                  value="{{ old('slug', $post) }}"></x-ui.wysiwyg>
                    @error('excerpt')
                    <span>
                        <i></i>
                    </span>
                    @enderror
                </div>
                @error('excerpt')
                <p class="niceWhite">{{ $message }}</p>
                @enderror
            </div>

            <div class="secondarySection">
                <label for="body" class="niceYellow">Body</label>
                <div>
                    <x-ui.wysiwyg name="body" rows="15"
                                  placeholder="Enter the blog post's content..."
                                  value="{{ old('body', $post) }}"></x-ui.wysiwyg>
                    @error('body')
                    <span>
                        <i></i>
                    </span>
                    @enderror
                </div>
                @error('body')
                <p class="niceWhite">{{ $message }}</p>
                @enderror
            </div>

            <div class="buttonContainer">
                <button type="submit" class="styledButton">Save</button>
                <a href="{{ url()->previous() }}" class="styledButton">Cancel</a>
                <button type="reset" class="styledButton">Reset</button>
            </div>
        </form>
    </div>
</x-layout.main>
