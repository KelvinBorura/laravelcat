<h1>Welcome, {{ $user->name }}</h1>
<p>Email: {{ $user->email }}</p>

<!-- Add form to update profile -->
<form action="{{ route('profile.update') }}" method="POST">
    @csrf
    <br>
    
    <label for="profile_photo">Profile Photo:</label>
    <input type="file" name="profile_photo" value="{{ $user->name }}">
    <br>
    <label for="name">Name:</label>
    <input type="text" name="name" value="{{ $user->name }}">
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" value="{{ $user->email }}">
    <br>
    <button type="submit">Update Profile</button>
</form>