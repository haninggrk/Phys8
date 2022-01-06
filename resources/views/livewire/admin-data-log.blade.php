<div>
    <input type="text" placeholder="Search..." wire:model.debounce.1ms="search">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Table Name</th>
                <th>Student id</th>
                <th>Log note</th>
                <th>Log description</th>
                <th>Log path</th>
                <th>Log ip</th>
            </tr>
        </thead>
            <tbody>
                @foreach($AdminDataLog as $index => $product)
                    <tr>
                        <td> {{$product['id']}}</td>
                        
                        <td class="text-center">
                            @if($editAdminDataLogIndex !== $index)
                                {{$product['tablename']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataLog.{{$index}}.email">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataLogIndex !== $index)
                                {{$product['Student_id']['id']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataLog.{{$index}}.username">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataLogIndex !== $index)
                                {{$product['Log_note']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataLog.{{$index}}.school">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataLogIndex !== $index)
                                {{$product['log_description']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataLog.{{$index}}.name">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataLogIndex !== $index)
                                {{ $product['log_path'] }}
                            @else
                                <input type="text" wire:model.defer="AdminDataLog.{{$index}}.city">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataLogIndex !== $index)
                                {{$product['log_ip']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataLog.{{$index}}.birthyear">
                            @endif  
                        </td>
                    </tr>
                @endforeach
            </tbody>
    </table>
</div>
