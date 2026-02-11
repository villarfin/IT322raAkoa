@extends('users.layout')
@section('title','Edit User')
@section('content')
<div class="card">
    <h2>Edit User</h2>
    <form action="{{ route('users.update', $user) }}" method="POST">
        @method('PUT')
        @include('users._form')
    </form>
</div>
@endsection
