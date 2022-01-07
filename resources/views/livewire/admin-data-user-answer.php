<div>
    <input type="text" placeholder="Search..." wire:model.debounce.1ms="search">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
            <tbody>
                @foreach($AdminDataUserAnswer as $index => $product)
                    <tr>
                        <td> {{$product['id']}}</td>
                        
                        <td class="text-center">
                            @if($editAdminDataUserAnswerIndex !== $index)
                                {{$product['name']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataUserAnswer.{{$index}}.name">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataUserAnswerIndex !== $index)
                                {{$product['description']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataUserAnswer.{{$index}}.description">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataUserAnswerIndex !== $index)
                                {{$product['description']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataUserAnswer.{{$index}}.description">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataUserAnswerIndex !== $index)
                                <button wire:click.prevent="editAdminDataUserAnswer({{$index}})">Ubah</button>
                            @else
                                <button wire:click.prevent="saveAdminDataUserAnswer({{$index}})">Simpan</button>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
    </table>
</div>
