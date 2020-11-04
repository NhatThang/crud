@extends('layouts.master-new')
@section('tittle', 'Edit Post')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Edit Post
                    </div>
                    <div class="card-body">
                        @if(Session::has('post_updated'))
                            <div class="alert alert-success">
                                {{ Session::get('post_updated') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('post.update') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $edit_post->id }}">
                            <div class="form-group">
                                <label for="tittle">Post Tittle</label>
                                <input type="text" name="tittle" value="{{ $edit_post->tittle }}" class="form-control" placeholder="Enter Post Tittle">
                                @error('tittle')
                                    <small style="color: red">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="body">Post Body</label>
                                <textarea name="body" class="form-control" rows="3">{{ $edit_post->body }}</textarea>
                                @error('body')
                                    <small style="color: red">{{ $message }}</small>
                                @enderror
                            </div>
                            <input type="submit" value="Update" class="btn btn-success">
                            <a href="{{ route('getallpost') }}" class="btn btn-warning">Back</a>
                            {{-- <a href="{{ route('post.update') }}" class="btn btn-success">Update</a> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
