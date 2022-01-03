
<div class="container">
    <div class="row justify-content-center">
        <h1>Question Table</h1>
    </div>

    <div class="text-right">
        <a class="btn btn-success pull-right" href="{{ route('questions.create') }}">
            <i class="fas fa-arrow-alt-circle-right"></i> Create Question</a>
    </div>


    <table class="table">
        <thead>
            <tr>
                <td>NO</td>
                <td>Username</td>
                <td>Question Text</td>
                <td>User Answer</td>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php $index = 0 @endphp
            @foreach ($history as $quest)
                <tr>
                <td><a>$index++</a></td>
                <td class="text-center">
                       {{$quest->user->username}}
                    </td>
                    <td class="text-center">
                       {{$quest->questions->question_text}}
                    </td>
                    <td class="text-center">
                       {{$quest->questions->pivot->user_answer}}
                    </td>
                    <td class="text-center">
                        <form action="{{ route('questions.destroy',$quest->questions->pivot->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

