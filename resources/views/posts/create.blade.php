@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="" method="POST">
                    <h4>Create a task</h4>

                    <x-form.input name="title" placeholder="Insert post title"/>

                    <label for="body">Post</label>
                    <textarea name="body" id="body" cols="30" rows="5" class="form-control"></textarea>

                    <x-form.input placeholder="Post Category" name="category" />
                </form>
            </div>
        </div>
    </div>
@endsection
