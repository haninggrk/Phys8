
<div class="container">
    <div class="row justify-content-center">
        <h1>Image Table</h1>
    </div>

    <div class="text-right">
        <a class="btn btn-success pull-right" href="{{ route('images.create') }}">
            <i class="fas fa-arrow-alt-circle-right"></i> Create Question</a>
    </div>


    <table class="table">
        <thead>
            <tr>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php $index = 1 @endphp
            @foreach ($images as $image)
                <tr>

                    <td class="text-center">
                        <form action="{{ route('images.destroy',$image->id) }}" method="POST">
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

