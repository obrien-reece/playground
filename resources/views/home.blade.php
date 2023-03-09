@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <span>
                <a style="text-decoration: none" href="{{ route('posts.create') }}">Create Posts</a>
            </span>

            <x-table.table col_1="Title" col_2="Body" col_3="Actions">
                <x-slot:trigger>
                    @php $counter = 1 @endphp

                    @foreach($posts as $post)
                        <tr>
                            <th scope="row">{{ $counter++ }}</th>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->body }}</td>
                            <td>

                                @can('update', $post)
                                    <button type="submit" class="btn btn-success mb-2">Edit</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                @endcan

                            </td>
                        </tr>
                    @endforeach
                </x-slot:trigger>
            </x-table.table>

        </div>
    </div>
</div>
@endsection
