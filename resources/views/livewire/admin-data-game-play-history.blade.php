<div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Student Id</th>
                <th>Level ID</th>
                <th>Score</th>
                <th>Money Reward</th>
                <th>Ticket Reward</th>
                <th>Sum Correct Answer</th>
                <th>Created_at</th>
            </tr>
        </thead>
            <tbody>
                @foreach($AdminDataGamePlayHistory as $product)
                    <tr>
            
                        <td> {{$product->id}}</td>
                        
                        <td class="text-center">
                           
                                {{$product->student_id}}
                           
                        </td>

                        <td class="text-center">
                          
                       
                        {{$product->fis8_level_id}}
                        </td>
                        
                        <td class="text-center">
                          
                                {{$product->score}}
                           
                        </td>
                        
                        <td class="text-center">
                          
                                {{$product->money_reward}}
                           
                        </td>
                        
                        <td class="text-center">
                          
                                {{$product->ticket_reward}}
                           
                        </td>
                      
                        <td class="text-center">
                        @if($product->sum_correct_answer!="")
                          {{$product->sum_correct_answer}}
                          @else
                            -
                  @endif
                  </td>
                        <td class="text-center">
                          
                          {{$product->created_at}}
                     
                  </td>
                    </tr>
                
                @endforeach
            </tbody>
    </table>
</div>


