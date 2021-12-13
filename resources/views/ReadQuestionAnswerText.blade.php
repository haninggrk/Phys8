
<div class="container">
    <div class="row justify-content-center">
        <h1>question answer Table</h1>
    </div>

    <div class="text-right">
        <a class="btn btn-success pull-right" href="{{ route('qatxts.create') }}">
            <i class="fas fa-arrow-alt-circle-right"></i> Create question answer text</a>
    </div>


    <table class="table">
        <thead>
            <tr>
            <td>NO</td>
                <td>question text</td>
                <th>Correct answer?</th>
                <td>Answer Option Text</td>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php $index = 1 @endphp
            @foreach ($question as $qatxt)
                <tr>
                <td>$index++</td>
                <td>{{$qatxt->question_text}}</td>
                <td>{{$qatxt->answerOptionTexts->pivot->is_correct_answer}}</td>
                <td>{{$qattxt->answerOptionTexts->answer_option_text}}</td>
                    <td class="text-center">
                        <form action="{{ route('qatxts.destroy',$qatxt->answerOptionTexts->pivot->id) }}" method="POST">
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

