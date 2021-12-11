
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
                <th>Correct answer?</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php $index = 1 @endphp
            @foreach ($qatxts as $qatxt)
                <tr>
                <td>{{$qattxt['answer_option_text']}}</td>
                    <td class="text-center">
                        <form action="{{ route('qatxts.destroy',$qatxt->id) }}" method="POST">
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

