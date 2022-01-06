<div>
    <input type="text" placeholder="Search..." wire:model.debounce.1ms="search">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Username</th>
                <th>School</th>
                <th>Real name</th>
                <th>City</th>
                <th>Birthyear</th>
                <th>Email Verified when?</th>
                <th>Login</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
            <tbody>
                @foreach($AdminDataLevel as $index => $product)
                    <tr>
                        <td> {{$product['id']}}</td>
                        
                        <td class="text-center">
                            @if($editAdminDataLevelIndex !== $index)
                                {{$product['email']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataLevel.{{$index}}.email">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataLevelIndex !== $index)
                                {{$product['username']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataLevel.{{$index}}.username">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataLevelIndex !== $index)
                                {{$product['school']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataLevel.{{$index}}.school">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataLevelIndex !== $index)
                                {{$product['name']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataLevel.{{$index}}.name">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataLevelIndex !== $index)
                                {{ $product['city'] }}
                            @else
                                <input type="text" wire:model.defer="AdminDataLevel.{{$index}}.city">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataLevelIndex !== $index)
                                {{$product['birthyear']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataLevel.{{$index}}.birthyear">
                            @endif  
                        </td>

                        <td class="text-center">
                            @if($editAdminDataLevelIndex !== $index)
                                {{$product['my_user']['email_verified_at']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataLevel.{{$index}}.my_user.email_verified_at">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataLevelIndex !== $index)
                                {{$product['my_user']['is_login']}}
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
