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
                @foreach($AdminDataTicketTransaction as $index => $product)
                    <tr>
                        <td> {{$product['id']}}</td>
                        
                        <td class="text-center">
                            @if($editAdminDataTicketTransactionIndex !== $index)
                                {{$product['student']['id']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataTicketTransaction.{{$index}}.student.id">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataTicketTransactionIndex !== $index)
                                {{$product['add_ticket']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataTicketTransaction.{{$index}}.add_ticket">
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
    </table>
</div>
