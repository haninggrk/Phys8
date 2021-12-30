
<div class="container">
    <div class="row justify-content-center">
        <h1>HighScore</h1>
    </div>

    <table class="table">
        <thead>
            <tr>
            <td>NO</td>
            <td>Username</td>
            <td>Score</td>
            </tr>
        </thead>
        <tbody>
            @php $index = 1 @endphp
            @foreach ($student as $stu)
                <tr>
                <td>$index++</td>
                <td>{{$stu->answer_option_text}}</td>
                <td>{{$stu->username}}</td>
                <td>{{$stu->score}}</td>
                    <td class="text-center">
                        <form action="{{ route('opttxts.destroy',$stu->id) }}" method="POST">
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

