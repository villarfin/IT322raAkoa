@csrf

<div class="field">
    <label>Name</label>
    <input type="text" name="name" value="{{ old('name', $user->name ?? '') }}" required>
    @error('name')<div class="muted">{{ $message }}</div>@enderror
</div>

<div class="field">
    <label>Number</label>
    <input type="text" name="number" value="{{ old('number', $user->number ?? '') }}">
    @error('number')<div class="muted">{{ $message }}</div>@enderror
</div>

<div class="field">
    <label>Age</label>
    <input type="number" name="age" min="0" max="150" value="{{ old('age', $user->age ?? '') }}">
    @error('age')<div class="muted">{{ $message }}</div>@enderror
</div>

<div class="field">
    <label>Email</label>
    <input type="email" name="email" value="{{ old('email', $user->email ?? '') }}" required>
    @error('email')<div class="muted">{{ $message }}</div>@enderror
</div>

<div class="field">
    <label>Password @if(isset($user)) <small class="muted">(leave blank to keep)</small> @endif</label>
    <input type="password" name="password" {{ isset($user) ? '' : 'required' }}>
    @error('password')<div class="muted">{{ $message }}</div>@enderror
</div>

<div class="field">
    <label>Confirm Password</label>
    <input type="password" name="password_confirmation" {{ isset($user) ? '' : 'required' }}>
</div>

<div style="display:flex;gap:8px;align-items:center">
    <button class="btn" type="submit">Save</button>
    <a href="{{ route('users.index') }}" class="btn secondary">Cancel</a>
</div>
