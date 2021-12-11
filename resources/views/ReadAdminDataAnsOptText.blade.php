
<div class="container">
    <div class="row justify-content-center">
        <h1>Answer Image Text Table</h1>
    </div>

    <div class="text-right">
        <a class="btn btn-success pull-right" href="{{ route('opttxts.create') }}">
            <i class="fas fa-arrow-alt-circle-right"></i> Create Answer Option Text</a>
    </div>


    <table class="table">
        <thead>
            <tr>
            <td>Option Text Answers</td>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php $index = 1 @endphp
            @foreach ($opttxts as $opttxt)
                <tr>
                <td>{{$opttxt['answer_option_text']}}</td>
                    <td class="text-center">
                        <form action="{{ route('opttxts.destroy',$opttxt->id) }}" method="POST">
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

