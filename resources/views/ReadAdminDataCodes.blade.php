
<div class="container">
    <div class="row justify-content-center">
        <h1>Codes Table</h1>
    </div>

    <div class="text-right">
        <a class="btn btn-success pull-right" href="{{ route('codes.create') }}">
            <i class="fas fa-arrow-alt-circle-right"></i> Create Code</a>
    </div>


    <table class="table">
        <thead>
            <tr>
            <td>NO</td>
            <td>Code</td>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php $index = 1 @endphp
            @foreach ($codes as $code)
                <tr>
                <td><a>$index++</a></td>
                <td class="text-center">
                         {{$code['code']}}
                    </td>
                    <td class="text-center">
                        <form action="{{ route('codes.destroy',$code->id) }}" method="POST">
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

