<x-layout>
    <x-slot name="heading">Users</x-slot>
<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>age</th>
            </tr> 
        </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user['id'] }}</td>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['gender'] }}</td>
                    </tr>
                @endforeach
            </tbody>
    </table>
</div>
</x-layout>