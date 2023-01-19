@extends('layouts/main')
@section('title', 'users-paginated')
@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @foreach ($users as $user)
                   {{$user->name}}
                @endforeach
                {{$users->links()}}
            </div>
        </div>
    </div>

@endsection