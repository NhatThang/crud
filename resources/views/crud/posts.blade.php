@extends('layouts.master-new')
@section('tittle', 'All the post')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <span style="font-size: 30px">All Posts</span>
                        <a href="{{ route('post.add') }}" class="btn btn-info float-right">Create Post</a>
                    </div>
                    <div class="card-body">
                        @if(Session::has('post_deleted'))
                            <div class="alert alert-success">
                                {{ Session::get('post_deleted') }}
                            </div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Tittle</th>
                                    <th>Body</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{ $post->tittle }}</td>
                                        <td>{{ $post->body }}</td>
                                        <td>
                                            <a href="/postss/{{ $post->id }}" class="btn btn-success">View</a>
                                            <a href="/edit-post/{{ $post->id }}" class="btn btn-info">Edit</a>
                                            <a href="/delete-post/{{ $post->id }}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
