<div>

<div class="container">
    <div class="row justify-content-center">
        <h1>History for user Table</h1>
    </div>

    <table class="table">
        <thead>
            <tr>
                <td>ID</td>
                <td>student_id</td>
                <td>score</td>
                <td>money_reward</td>
                <td>sum_correct_answer</td>
                <td>created_at</td>

            </tr>
        </thead>
        <tbody>
            @php $index = 0 @endphp
            @foreach ($getHistory as $Ghis)
                <tr>
                <td><a>$index++</a></td>
                <td class="text-center">
                       {{$Ghis->ID}}
                    </td>
                    <td class="text-center">
                       {{$Ghis->student_id}}
                    </td>
                    <td class="text-center">
                       {{$Ghis->score}}
                    </td>
                    <td class="text-center">
                        {{$Ghis->money_reward}}
                     </td>
                     <td class="text-center">
                        {{$Ghis->sum_correct_answer}}
                     </td>
                     <td class="text-center">
                        {{$Ghis->created_at}}
                     </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


</div>
