<div>
    <input type="text" placeholder="Search..." wire:model.debounce.1ms="search">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Level</th>
                <th>Question Text</th>
                <th>Correct Answer</th>
                <th>discussion</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
            <tbody>
                @foreach($AdminDataQuestion as $index => $product)
                    <tr>
                        <td> {{$product['id']}}</td>
                        
                        <td class="text-center">
                            @if($editAdminDataQuestionIndex !== $index)
                                {{$product['level']['id']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataQuestion.{{$index}}.level.id">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataQuestionIndex !== $index)
                                {{$product['question_text']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataQuestion.{{$index}}.question_text">
                            @endif
                        </td>

                        <td class="text-center">
                                {{$product['correct_answer_option']}}
                        </td>

                        <td class="text-center">
                            @if($editAdminDataQuestionIndex !== $index)
                                {{$product['discussion']}}
                            @else
                                <input type="text" wire:model.defer="AdminDataQuestion.{{$index}}.discussion">
                            @endif
                        </td>

                        <td class="text-center">
                            @if($editAdminDataQuestionIndex !== $index)
                                <button wire:click.prevent="editAdminDataQuestion({{$index}})">Ubah</button>
                            @else
                                <button wire:click.prevent="saveAdminDataQuestion({{$index}})">Simpan</button>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
    </table>
</div>
