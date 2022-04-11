
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    There are: {{ $users->count() }} {{ Str::plural('user', $users->count()) }}

    <ul>
        @foreach($users as $user)
            <li>
                {{ $user->name }}
                <form action="{{ route('user.destroy', ['user' => $user->id]) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">delete user</button>
                </form>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('user.create') }}">Create new</a>
</div>
