
<div class="container">
    <div class="row justify-content-center">
        <h1>Code Request</h1>
    </div>

    <div class="text-right">
        <a class="btn btn-success pull-right" href="{{ route('questions.create') }}">
            <i class="fas fa-arrow-alt-circle-right"></i> Add Transactions</a>
    </div>


    <table class="table">
        <thead>
            <tr>
                <td>NO</td>
                <td>Add Transactions</td>

            </tr>
        </thead>
        <tbody>
            @php $index = 0 @endphp
            @foreach ($history as $his)
                <tr>
                <td><a>$index++</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

