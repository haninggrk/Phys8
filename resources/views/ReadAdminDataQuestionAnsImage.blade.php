
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
                <td>Level Name</td>
                <td>Question Text</td>
                <td>Image</td>
                <td>is Correct Answer?<td>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php $index = 1 @endphp
            @foreach ($question as $qansimg)
                <tr>
                <td class="text-center">
                        {{$qansimg->question_text}
                    </td>
                    <td class="text-center">
                       {{$qansimg->imageQuestionAnswerImages->image}}
                    </td>
                    <td class="text-center">
                       {{$qansimg->imageQuestionAnswerImages->pivot->is_correct_answer}}
                    </td>
                    <td class="text-center">
                        <form action="{{ route('qansimgs.destroy',$qansimg->imageQuestionAnswerImages->pivot->id) }}" method="POST">
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

