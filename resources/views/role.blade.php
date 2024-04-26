@extends('dashboard')

@section('title', 'Power Gym - Roles')

@section('content')
<style>
    body {
        background-image: url("https://files.123freevectors.com/wp-content/original/128899-glowing-red-and-blue-wave-background.jpg");
        background-size: cover; /* Scale the background to be as large as possible */
    background-position: center; /* Center the background image */
    background-repeat: no-repeat; /* Do not repeat the background */
    background-attachment: fixed;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        color: #E0E0E0;
    }

    .container {
        background-color: rgba(45, 85, 255, 0.2);
        padding: 20px;
        border-radius: 8px;
        width: 110%;
        max-width: 1200px;
        margin-top: 50px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
    }

    h1 {
        text-align: center;
        color: rgba(72, 113, 247);
    }

    form {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    input[type="text"], select, button {
        flex-grow: 1;
        padding: 8px;
        margin: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background: rgba(44, 44, 78, 0.85);
        color: #fff;
    }

    button[type="submit"] {
        background-color: #cc0000;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #d63384;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        text-align: left;
        padding: 8px;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #cc0000;
        color: white;
    }

    td {
        background-color: rgba(45, 85, 255, 0.2);
        color: #E0E0E0;
    }

    .pagination {
        justify-content: center;
        padding: 20px 0;

    }

    .role-update-form {
        display: flex;
        justify-content: start;
        align-items: center;
    }
</style>

<div class="container">
    <h1>Manage User Roles</h1>
    <form action="{{ route('admin.users.index') }}" method="GET">
        <input type="text" name="query" placeholder="Search by name or email" value="{{ request()->input('query', '') }}">
        <button type="submit">Search</button>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
         @foreach ($users as $user)
                @if (!$user->isAdmin1()) <!-- Check if the user is not an admin directly -->
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td colspan="2">
                            <form action="{{ route('admin.users.updateRole', $user) }}" method="POST" class="role-update-form">
                                @csrf
                                <select name="role">
                                    @foreach (['member', 'trainers', 'admin'] as $role)
                                        <option value="{{ $role }}" {{ $user->role == $role ? 'selected' : '' }}>
                                            {{ ucfirst($role) }}
                                        </option>
                                    @endforeach
                                </select>
                                <button type="submit">Update</button>
                            </form>
                        </td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
    {{ $users->links() }} <!-- Pagination -->
</div>
@endsection