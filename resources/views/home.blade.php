@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <span>
                <a style="text-decoration: none" href="{{ route('posts.create') }}">Create Posts</a>
            </span>
        </div>
    </div>
</div>
@endsection
