@extends('users.layout')
@section('title','Users')
@section('content')
<div class="card">
    <div style="display:flex;align-items:center;justify-content:space-between">
        <h2 style="margin:0">Users</h2>
        <a href="{{ route('users.create') }}" class="btn">+ New User</a>
    </div>
</div>

<div class="grid">
    @foreach($users as $user)
        <div class="card">
            <h3 style="margin:0 0 6px 0">{{ $user->name }}</h3>
            <div class="muted">Email: {{ $user->email }}</div>
            <div class="muted">Number: {{ $user->number ?? '—' }}</div>
            <div class="muted">Age: {{ $user->age ?? '—' }}</div>
            <div style="margin-top:12px;display:flex;gap:8px">
                <a href="{{ route('users.show', $user) }}" class="btn secondary">View</a>
                <a href="{{ route('users.edit', $user) }}" class="btn">Edit</a>
                <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn secondary" style="border-color:rgba(255,0,0,0.06);color:#ef4444">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
</div>

<div style="margin-top:12px">{{ $users->links() }}</div>

@endsection
