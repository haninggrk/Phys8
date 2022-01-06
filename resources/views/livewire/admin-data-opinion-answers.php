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
                @foreach($AdminDataCategory as $index => $product)
                    <tr>
                        <td> {{$product['id']}}</td>
                        
                        <td class="text-center">
                            @if($editAdminDataCategoryIndex !== $index)
                                {{$product['name']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataCategory.{{$index}}.email">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataCategoryIndex !== $index)
                                {{$product['description']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataCategory.{{$index}}.username">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataCategoryIndex !== $index)
                                <button wire:click.prevent="editAdminDataCategory({{$index}})">Ubah</button>
                            @else
                                <button wire:click.prevent="saveAdminDataCategory({{$index}})">Simpan</button>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
    </table>
</div>
