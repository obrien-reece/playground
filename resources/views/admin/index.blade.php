@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
           <div class="col-md-6">
               <div>
                   <a style="text-decoration: none;color: black" href="{{ route('admin.roles.index') }}">View All Roles</a>
               </div>
               <div>
                   <a style="text-decoration: none;color: black" href="{{ route('admin.permissions.index') }}">View All Permissions</a>
               </div>

               @can('post articles')
                   <span>Post some articles</span>
               @endcan

           </div>
        </div>
    </div>
@endsection
