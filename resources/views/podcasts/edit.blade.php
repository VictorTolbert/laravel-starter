@extends('layouts.app')

@section('content')
<div class="container mt-6">
    <h1 class="title mb-6">Podcast Settings</h1>
    <div class="columns row pull-x-4 border-b pb-6 mb-6">
        <div class="column is-4 col-4 px-4">
            <h2 class="text-lg mb-2">Podcast Details</h2>
            <p class="text-dark-soft">Update your podcast title, description, and website URL.</p>
        </div>
        <div class="column is-8 col-8 px-4">
            <form action="{{ url("/podcasts/{$podcast->id}") }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <label class="block mb-6">
                    <span class="block text-medium mb-2">Title</span>
                    <input class="input form-control" name="title" placeholder="The World's Best Podcast" value="{{ old('title', $podcast->title) }}">
                </label>
                <label class="block mb-6">
                    <span class="block text-medium mb-2">Description</span>
                    <textarea rows="3" class="textarea form-control" name="description" placeholder="The best podcast for getting the best information about the best stuff.">{{ old('description', $podcast->description) }}</textarea>
                </label>
                <label class="block mb-6">
                    <span class="block text-medium mb-2">Website URL</span>
                    <input class="input form-control" type="url" name="website" placeholder="http://example.com" value="{{ old('website', $podcast->website) }}">
                </label>
                <div class="has-text-right text-right">
                    <button class="button is-primary btn btn-primary btn-sm">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
    <div class="columns row pull-x-4">
        <div class="column is-4 col-4 px-4">
            <h2 class="text-lg mb-2">Cover Image</h2>
            <p class="text-dark-soft">Add a new cover image to your podcast.</p>
        </div>
        <div class="column is-8 col-8 px-4">
            <cover-image-upload :podcast="{{ $podcast }}"></cover-image-upload>
        </div>
    </div>
</div>
@endsection
