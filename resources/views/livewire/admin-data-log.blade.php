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
                           
                                {{$product['table_name']}}
                        </td>

                        <td class="text-center">
                           
                                {{$product['student']['id']}}
                           
                        </td>

                        <td class="text-center">
                           
                                {{$product['Log_note']}}
                           
                        </td>

                        <td class="text-center">
                           
                                {{$product['log_description']}}
                            
                        </td>

                        <td class="text-center">
                           
                                {{ $product['log_path'] }}
                           
                        </td>

                        <td class="text-center">
                           
                                {{$product['log_ip']}}
                            
                        </td>
                    </tr>
                @endforeach
            </tbody>
    </table>
</div>
