<h1>Create a new user</h1>

<form method="post" action="{{ route('user.store') }}">
    @csrf

    name: <input name="name" />
    email: <input type="email" name="email" />
    password: <input type="password" name="password" />
    birthdate: <input type="date" name="birthdate" />

    <button type="submit">Save</button>
</form>
