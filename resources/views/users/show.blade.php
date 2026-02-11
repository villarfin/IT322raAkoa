@extends('users.layout')
@section('title','User Detail')
@section('content')
<div class="card">
    <div style="display:flex;justify-content:space-between;align-items:center">
        <div>
            <h2 style="margin:0">{{ $user->name }}</h2>
            <div class="muted">Email: {{ $user->email }}</div>
            <div class="muted">Number: {{ $user->number ?? '—' }}</div>
            <div class="muted">Age: {{ $user->age ?? '—' }}</div>
        </div>
        <div style="display:flex;gap:8px">
            <a href="{{ route('users.edit', $user) }}" class="btn">Edit</a>
            <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button class="btn secondary" style="color:#ef4444">Delete</button>
            </form>
        </div>
    </div>
</div>

<div class="card">
    <h3>Metadata</h3>
    <div class="muted">Created: {{ $user->created_at->toDayDateTimeString() ?? '—' }}</div>
    <div class="muted">Updated: {{ $user->updated_at->toDayDateTimeString() ?? '—' }}</div>
</div>

@endsection
