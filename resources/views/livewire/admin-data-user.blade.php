<div>
    <table class="table">
        <thead>
            <tr>
                <th>NO</th>
                <th>Email</th>
                <th>Username</th>
                <th>School</th>
                <th>Real name</th>
                <th>City</th>
                <th>Birthyear</th>
                <th>Email Verified when?</th>
                <th>Login</th>
                <th>Active</th>
                <th>Admin</th>
                <th>Ticket</th>
                <th>Score</th>
                <th>Money</th>
                <th>Photo</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
            <tbody>
                @foreach($AdminDataUser as $index => $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        
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

                        <td class="text-center">
                            @if($editAdminDataUserIndex !== $index)
                                {{$product['my_user']['email_verified_at']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataUser.{{$index}}.my_user.email_verified_at">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataUserIndex !== $index)
                                {{$product['my_user']['is_login']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataUser.{{$index}}.my_user.is_login">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataUserIndex !== $index)
                                {{$product['my_user']['is_active']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataUser.{{$index}}.my_user.is_active">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataUserIndex !== $index)
                                {{$product['my_user']['is_admin']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataUser.{{$index}}.my_user.is_admin">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataUserIndex !== $index)
                                {{$product['my_user']['ticket']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataUser.{{$index}}.my_user.ticket">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataUserIndex !== $index)
                                {{$product['my_user']['score']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataUser.{{$index}}.my_user.score">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataUserIndex !== $index)
                                {{$product['my_user']['money']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataUser.{{$index}}.my_user.money">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataUserIndex !== $index)
                                {{$product['my_user']['photo']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataUser.{{$index}}.my_user.photo">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataUserIndex !== $index)
                                <button wire:click.prevent="editAdminDataUser({{$index}})">Ubah</button>
                            @else
                                <button wire:click.prevent="saveAdminDataUser({{$index}})">Simpan</button>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
    </table>
</div>
