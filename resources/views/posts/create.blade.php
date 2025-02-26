<x-layout.main>
    <form action="{{ route('posts.store') }}" method="POST" class="mainSection">
        @csrf
        <div class="secondarySection">
            <label for="title" class="niceYellow">Title</label>
            <div>
                <input type="text" name="title" placeholder="Enter the post's title..."
                       value="{{ old('title') }}" autocomplete="title" autofocus>
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
            <label for="slug" class="niceYellow">Summary</label>
            <div>
                <x-ui.wysiwyg name="slug" height="120"
                              placeholder="Enter the blog post's Summary..."
                              value="{{ old('slug') }}"></x-ui.wysiwyg>
                @error('slug')
                <span>
                <i></i>
            </span>
                @enderror
            </div>
            @error('slug')
            <p class="niceWhite">{{ $message }}</p>
            @enderror
        </div>

        <div class="secondarySection">
            <label for="body" class="niceYellow">Body</label>
            <div>
                <x-ui.wysiwyg name="body" rows="15"
                              placeholder="Enter the blog post's content..."
                              value="{{ old('body') }}"></x-ui.wysiwyg>
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

</x-layout.main>
