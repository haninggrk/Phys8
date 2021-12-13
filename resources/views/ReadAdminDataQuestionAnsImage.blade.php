
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
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php $index = 1 @endphp
            @foreach ($qansimgs as $qansimg)
                <tr>

                    <td class="text-center">
                        <form action="{{ route('qansimgs.destroy',$qansimg->id) }}" method="POST">
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

