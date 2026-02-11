@extends('users.layout')
@section('title','Create User')
@section('content')
<div class="card">
    <h2>Create User</h2>
    <form action="{{ route('users.store') }}" method="POST">
        @include('users._form')
    </form>
</div>
@endsection
