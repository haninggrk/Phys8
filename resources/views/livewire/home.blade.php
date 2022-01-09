<div>
   Uang: {{ auth()->user()->myUser->money }}
   Tiket: {{ auth()->user()->myUser->ticket }}
   Skor: {{ auth()->user()->myUser->quiz_score }}

   Halo, {{ auth()->user()->username }}
   Anda bergabung sejak {{ auth()->user()->created_at }}

   <br>
   //Kategori Permainan fast track
   Kamu telah bermain sebanyak  {{ $lastLevel }} Level

   <br>
   
  kamu berada diperingkat
  @foreach($leaderBoard as $leaderBoardData)
   @if($leaderBoardData->student->id == auth()->user()->id)
   {{ $loop->iteration }}/{{ count($leaderBoard) }} pengguna
   @endif
   @endforeach

  <br>
  Peringkat
   @foreach($leaderBoard as $leaderBoardData)
   <br>
   {{ $loop->iteration }}
   <br>
   Username: {{ $leaderBoardData->student->username }}
   <br>
   Skor: {{ $leaderBoardData->score }}
   @endforeach

   <br><br><br>
   ////History<br>
   @foreach($getHistoryUser as $history)
   <br>
   Tanggal: {{ $history->pivot->created_at }}
   <br>
   Kategori Permainan: {{ $history->category->name }}
   <br>
   Permainan: {{ $history->name }}
   <br>
   dolar: {{ $history->pivot->money_reward }}
   <br>
   ticket: {{ $history->pivot->ticket_reward }}
   <br>
   skor: {{ $history->pivot->score }}
  
   @endforeach
</div>
