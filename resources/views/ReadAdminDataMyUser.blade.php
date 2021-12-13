
<div class="container">
    <div class="row justify-content-center">
        <h1>Question Answer Image Table</h1>
    </div>

    <div class="text-right">
        <a class="btn btn-success pull-right" href="{{ route('qansimgs.create') }}">
            <i class="fas fa-arrow-alt-circle-right"></i> Create Answer Option Image</a>
    </div>


    <table class="table">
        <thead>
            <tr>
                <th>NO</th>
                <th>Email</th>
                <th>Username</th>
                <th>Real name</th>
                <th>School</th>
                <th>City</th>
                <th>Birthyear</th>
                <th>Email Verified when?</th>
                <th>Login</th>
                <th>Active</th>
                <th>Admin</th>
                <th>Ticket</th>
                <th>Score</th>
                <th>Money</th>
                <th>Photo</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
            @php $index = 0 @endphp
            @foreach ($student as $stupid)
        <tbody>
                <td>$index++</td>
                <td class="text-center">
                        {{$stupid->email}
                    </td>
                    <td class="text-center">
                       {{$tupid->username}}
                    </td>
                    <td class="text-center">
                       {{$stupid->school}}
                    </td>
                    <td class="text-center">
                        {{$stupid->city}
                    </td>
                    <td class="text-center">
                       {{$tupid->Birthyear}}
                    </td>
                    <td class="text-center">
                        {{$stupid->email_verified_at}}
                    </td>
                    <td class="text-center">
                       {{$tupid->is_login}}
                    </td>
                    <td class="text-center">
                       {{$stupid->is_active}}
                    </td>
                    <td class="text-center">
                        {{$stupid->is_admin}
                    </td>
                    <td class="text-center">
                       {{$tupid->ticket}}
                    </td>
                    <td class="text-center">
                       {{$stupid->score}}
                    </td>
                    <td class="text-center">
                        {{$stupid->money}
                    </td>
                    <td class="text-center">
                       {{$tupid->photo}}
                    </td>
                    <td class="text-center">
                        <form action="{{ route('myuser.destroy',$stupid->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Suspended</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

