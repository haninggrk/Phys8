<div>
    <input type="text" placeholder="Search..." wire:model.debounce.1ms="search">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Opinion text</th>
                <th>Image</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
            <tbody>
                @foreach($AdminDataOptionAnswer as $index => $product)
                    <tr>
                        <td> {{$product['id']}}</td>
                        
                        <td class="text-center">
                            @if($editAdminDataOptionAnswerIndex !== $index)
                                {{$product['opinion_text']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataOptionAnswer.{{$index}}.email">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataOptionAnswerIndex !== $index)
                                {{$product['is_image']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataOptionAnswer.{{$index}}.username">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataOptionAnswerIndex !== $index)
                                <button wire:click.prevent="editAdminDataOptionAnswer({{$index}})">Ubah</button>
                            @else
                                <button wire:click.prevent="saveAdminDataOptionAnswer({{$index}})">Simpan</button>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
    </table>
</div>
