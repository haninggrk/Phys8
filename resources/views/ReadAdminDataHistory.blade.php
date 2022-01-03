
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
                <td>Time Taken</td>
                <td>Correct Answer in Total</td>

            </tr>
        </thead>
        <tbody>
            @php $index = 0 @endphp
            @foreach ($history as $his)
                <tr>
                <td><a>$index++</a></td>
                <td class="text-center">
                       {{$his->user->username}}
                    </td>
                    <td class="text-center">
                       {{$his->time_taken}}
                    </td>
                    <td class="text-center">
                       {{$his->sum_correct_answer}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

