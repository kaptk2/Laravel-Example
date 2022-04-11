<form method="post" action="{{ route('user.update', ['user' => $user->id]) }}">
    @csrf

    @method('put')

    name: <input name="name" value="{{ $user->name }}"/>
    email: <input type="email" value="{{ $user->email }}" name="email" />

    @error('birthdate')Enter a birthdate @enderror

    <button type="submit">Save</button>
</form>
