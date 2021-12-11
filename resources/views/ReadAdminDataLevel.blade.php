
<div class="container">
    <div class="row justify-content-center">
        <h1>Level Table</h1>
    </div>

    <div class="text-right">
        <a class="btn btn-success pull-right" href="{{ route('levels.create') }}">
            <i class="fas fa-arrow-alt-circle-right"></i> Create Level</a>
    </div>


    <table class="table">
        <thead>
            <tr>
            <td><a>NO</a></td>
            <td><a>Level name</a></td>
            <td><a>Category</a></td>
            <td><a>Thumbnail</a></td>
            <td><a>Description</a></td>
            <td><a>Score Reward</a></td>
            <td><a>Ticket Reward</a></td> 
            <td><a>Money Reward</a></td> 
            <td><a>Maximum Time</a></td>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php $index = 0 @endphp
            @foreach ($levels as $level)
                <tr>
                <td><a>$index++</a></td>
            <td><a>{{$level['name']}}</a></td>
            <td><a>{{$level['fis8_category_id']}}</a></td>
            <td><a>{{$level['thumbnail']}}</a></td>
            <td><a>{{$level['description']}}</a></td>
            <td><a>{{$level['score_reward']}}</a></td>
            <td><a>{{$level['ticket_reward']}}</a></td> 
            <td><a>{{$level['money_reward']}}</a></td> 
            <td><a>{{$level['maximum_time']}}</a></td>
                    <td class="text-center">
                        <form action="{{ route('levels.destroy',$level->id) }}" method="POST">
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

