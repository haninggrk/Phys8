<div>
    <input type="text" placeholder="Search..." wire:model.debounce.1ms="search">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Thumbnail</th>
                <th>Description</th>
                <th>Score reward</th>
                <th>Ticket Reward</th>
                <th>Money Reward</th>
                <th>Category</th>
                <th>Time Maximum</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
            <tbody>
                @foreach($AdminDataLevel as $index => $product)
                    <tr>
                        <td> {{$product['id']}}</td>
                        
                        <td class="text-center">
                            @if($editAdminDataLevelIndex !== $index)
                                {{$product['name']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataLevel.{{$index}}.email">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataLevelIndex !== $index)
                                {{$product['thumbnail']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataLevel.{{$index}}.username">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataLevelIndex !== $index)
                                {{$product['description']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataLevel.{{$index}}.school">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataLevelIndex !== $index)
                                {{$product['score_reward']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataLevel.{{$index}}.name">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataLevelIndex !== $index)
                                {{ $product['ticket_reward'] }}
                            @else
                                <input type="text" wire:model.defer="AdminDataLevel.{{$index}}.city">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataLevelIndex !== $index)
                                {{$product['money_reward']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataLevel.{{$index}}.birthyear">
                            @endif  
                        </td>

                        <td class="text-center">
                            @if($editAdminDataLevelIndex !== $index)
                                {{$product['category']['id']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataLevel.{{$index}}.my_user.email_verified_at">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataLevelIndex !== $index)
                                {{$product['maximum_time']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataLevel.{{$index}}.my_user.is_login">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataLevelIndex !== $index)
                                <button wire:click.prevent="editAdminDataLevel({{$index}})">Ubah</button>
                            @else
                                <button wire:click.prevent="saveAdminDataLevel({{$index}})">Simpan</button>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
    </table>
</div>
