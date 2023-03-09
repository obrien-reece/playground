@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('posts.store') }}" method="POST">
                    @csrf

                    <h4>Create a task</h4>

                    <x-form.input name="title" placeholder="Insert post title"/>
                    @error('title')
                        <span><small style="color: red">{{ $message }}</small></span>
                    @enderror

                    <div class="form-group">
                        <label for="body">Post</label>
                        <textarea name="body" id="body" cols="30" rows="5" class="form-control"></textarea>
                    </div>

                    <div class="form-group mt-2 mb-2">
                        <label for="category_name">Select category</label>
                        <select class="form-control" name="category_id" id="category_id">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div style="float: right">
                        <button class="btn btn-success btn-block" type="submit">Create Post</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
