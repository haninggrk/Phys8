
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
                <td><a>NO</a></td>
                <td><a>Level ID</a></td>
                <td><a>Question Text</a></td>
                <td><a>Is Image answer?</a></td>
                <td><a>Discussion</a></td> 
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php $index = 0 @endphp
            @foreach ($questions as $quest)
                <tr>
                <td><a>$index++</a></td>
                <td class="text-center">
                       {{$quest['fis8_category_id']}}
                    </td>
                    <td class="text-center">
                        {{$quest['question_text']}
                    </td>
                    <td class="text-center">
                       {{$quest['is_image_answer'}}
                    </td>
                    <td class="text-center">
                        {{$quest['discussion'}}
                    </td>
                    <td class="text-center">
                        <form action="{{ route('questions.destroy',$quest->id) }}" method="POST">
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

