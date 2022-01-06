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
                @foreach($AdminDataQuizHistory as $index => $product)
                    <tr>
                        <td> {{$product['id']}}</td>
                        
                        <td class="text-center">
                           
                                {{$product['student']['id']}}
                           
                        </td>

                        <td class="text-center">
                           
                                {{$product['score']}}
                           
                        </td>

                        <td class="text-center">
                            
                                {{$product['money_reward']}}
                            
                        </td>

                        <td class="text-center">
                           
                                {{$product['sum_correct_answer']}}
                           
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
    </table>
</div>
