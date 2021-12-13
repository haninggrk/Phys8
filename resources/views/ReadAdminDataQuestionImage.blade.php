
<div class="container">
    <div class="row justify-content-center">
        <h1>Question Image Table</h1>
    </div>

    <div class="text-right">
        <a class="btn btn-success pull-right" href="{{ route('qimgs.create') }}">
            <i class="fas fa-arrow-alt-circle-right"></i> Create Question Image</a>
    </div>


    <table class="table">
        <thead>
            <tr>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php $index = 1 @endphp
            @foreach ($qimgs as $qimg)
                <tr>

                    <td class="text-center">
                        <form action="{{ route('qimgs.destroy',$qimg->id) }}" method="POST">
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

