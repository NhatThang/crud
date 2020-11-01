@extends('layouts.master-new')
@section('tittle','DB CRUD Operation')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Add new post
                        </div>
                        <div class="card-body">
                            @if(Session::has('post_created'))
                                <div class="alert alert-success">
                                    {{ Session::get('post_created') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('post.addsubmit') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="tittle">Post Tittle</label>
                                    <input type="text" name="tittle" class="form-control" placeholder="Enter Post Tittle" value="{{ old('tittle') }}">
                                    @error('tittle')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="body">Post Body</label>
                                    <textarea name="body" class="form-control" rows="3">{{ old('body') }}</textarea>
                                    @error('body')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>

                                <input type="submit" value="Submit" class="btn btn-info">
                                <a href="{{ route('getallpost') }}" class="btn btn-success">Get All Post</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
