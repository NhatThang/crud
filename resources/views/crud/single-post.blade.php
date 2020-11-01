@extends('layouts.master-new')
@section('tittle', 'Get By Id')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Post Details
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="tittle">Post Tittle</label>
                                <input type="text" name="tittle" value="{{ $post->tittle }}" class="form-control" placeholder="Enter Post Tittle">
                            </div>

                            <div class="form-group">
                                <label for="body">Post Body</label>
                                <textarea name="body" class="form-control" rows="3">{{ $post->body }}</textarea>
                            </div>
                            <a href="{{ URL::previous() }}" class="btn btn-warning">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
