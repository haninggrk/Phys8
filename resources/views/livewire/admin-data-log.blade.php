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
            </tr>
        </thead>
            <tbody>
                @foreach($AdminDataLog as $index => $product)
                    <tr>
                        <td> {{$product['id']}}</td>
                        
                        <td class="text-center">
                            @if($editAdminDataUserIndex !== $index)
                                {{$product['email']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataUser.{{$index}}.email">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataUserIndex !== $index)
                                {{$product['username']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataUser.{{$index}}.username">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataUserIndex !== $index)
                                {{$product['school']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataUser.{{$index}}.school">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataUserIndex !== $index)
                                {{$product['name']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataUser.{{$index}}.name">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataUserIndex !== $index)
                                {{ $product['city'] }}
                            @else
                                <input type="text" wire:model.defer="AdminDataUser.{{$index}}.city">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataUserIndex !== $index)
                                {{$product['birthyear']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataUser.{{$index}}.birthyear">
                            @endif  
                        </td>
                    </tr>
                @endforeach
            </tbody>
    </table>
</div>
