<div>
    <input type="text" placeholder="Search..." wire:model.debounce.1ms="search">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Student Id</th>
                <th>Added ticket</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
            <tbody>
                @foreach($AdminDataShootGameHistory as $index => $product)
                    <tr>
                        <td> {{$product['id']}}</td>
                        
                        <td class="text-center">
                            @if($editAdminDataShootGameHistoryIndex !== $index)
                                {{$product['student']['id']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataShootGameHistory.{{$index}}.email">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataShootGameHistoryIndex !== $index)
                                {{$product['score']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataShootGameHistory.{{$index}}.username">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataShootGameHistoryIndex !== $index)
                                {{$product['money_reward']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataShootGameHistory.{{$index}}.email">
                            @endif
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
    </table>
</div>
