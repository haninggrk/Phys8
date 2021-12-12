
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
            <td>NO</td>
            <td>Level name</td>
            <td>Category</td>
            <td>Thumbnail</td>
            <td>Description</td>
            <td>Score Reward</td>
            <td>Ticket Reward</td> 
            <td>Money Reward</td> 
            <td>Maximum Time</td>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            @php $index = 0 @endphp
            @foreach ($levels as $level)
                <tr>
                <td><a>$index++</a></td>
            <td><a>{{$level->name}}</a></td>
            <td><a>{{$level->fis8_category_id}}</a></td>
            <td><a>{{$level->thumbnail}}</a></td>
            <td><a>{{$level->description}}</a></td>
            <td><a>{{$level->score_reward}}</a></td>
            <td><a>{{$level->ticket_reward}}</a></td> 
            <td><a>{{$level->money_reward}}</a></td> 
            <td><a>{{$level->maximum_time}}</a></td>
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

