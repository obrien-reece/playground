@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
               <span>Admin Roles</span>
            </div>
            <div>
                <x-table.table col_1="Name" col_2="User role" col_3="Actions">
                    <x-slot:trigger>
                        @php $counter = 1 @endphp
                        @foreach($roles as $role)
                            <tr>
                                <th scope="row">{{ $counter++ }}</th>
                                <td>{{ $role->name }}</td>
                                <td>{{ $role->guard_name }}</td>
                                <td>Edit
                                </td>
                            </tr>
                        @endforeach
                    </x-slot:trigger>
                </x-table.table>
            </div>
        </div>
    </div>
@endsection
