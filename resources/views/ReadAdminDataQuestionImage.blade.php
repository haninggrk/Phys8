
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
                <td>Question text</td>
                <td>Question Image</td>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php $index = 1 @endphp
            @foreach ($question as $qimg)
                <tr>
                <td>$index++</td>
                <td>{{$qimg->question_text}}</td>
                <td>{{$qimg->images->image}}</td>
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

