
<div class="container">
    <div class="row justify-content-center">
        <h1>Category Table</h1>
    </div>

    <div class="text-right">
        <a class="btn btn-success pull-right" href="{{ route('cats.create') }}">
            <i class="fas fa-arrow-alt-circle-right"></i> Create Category</a>
    </div>


    <table class="table">
        <thead>
            <tr>
            <td>NO</td>
        <td>Category name</td>
        <td>Category Description</td>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php $index = 1 @endphp
            @foreach ($cats as $cat)
                <tr>
                <td>$index++</td>
                <td class="text-center">
                       {{$cat->name}}
                    </td>
                    <td class="text-center">
                        {{$cat->description}}
                    </td>
                    <td class="text-center">
                        <form action="{{ route('cats.destroy',$cat->id) }}" method="POST">
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

