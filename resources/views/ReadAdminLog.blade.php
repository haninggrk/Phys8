
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
            <td>Table Name</td>
            <td>Student ID</td>
            <td>log Note</td>
            <td>log Description</td>
            <td>log path</td> 
            <td>log Ip</td>
            </tr>
        </thead>
        <tbody>
            @php $index = 1 @endphp
            @foreach ($log as $code)
                <tr>
                <td>$index++</td>
                <td class="text-center">
                         {{$code->table_name}}
                    </td>
                    <td class="text-center">
                         {{$code->user->student_id}}
                    </td>
                    <td class="text-center">
                         {{$code->log_note}}
                    </td>
                    <td class="text-center">
                         {{$code->log_description}}
                    </td>
                    <td class="text-center">
                         {{$code->log_path}}
                    </td>
                    <td class="text-center">
                         {{$code->log_ip}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

