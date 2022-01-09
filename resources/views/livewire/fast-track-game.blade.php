<div>
    @if($myHistory==null)
   FAST TRACK<br>
   deskripsi: {{ $getCategory->description }}
 
   <br><br><br>
   Pilih Level
   @foreach($getCategory->levels as $level)
   <button wire:click="startQuiz({{$level->id}})">
            {{ $loop->iteration }}
        </button>
   @endforeach
  
@else
    <p id="countdown"></p>
@foreach($DataQuestionFromLevelId as $Data)
        <button wire:click="getQuestionWithId({{$Data->id}}, {{ $loop->iteration }})">
            Nomor {{ $loop->iteration }}
        </button>
       
        @endforeach
        @if($myQuestions != null)
    <div>Soal {{$numberQuestions}}</div>
    <div>
        {{ $myQuestions->question_text }}

        <p>Pilihan Jawaban</p>
       @foreach($myQuestions->answerOptions as $AnswerOptions)
  
       <div><button  @if($keteranganCorrectAnswer=="")
wire:click="saveUserAnswer({{ $myQuestions->id }}, '{{ $AnswerOptions->pivot->option}}')" @endif> {{$AnswerOptions->pivot->option}}.  {{$AnswerOptions->option_text}}
</button></div>
       @endforeach
    </div>
  @endif
    <div>
        {{ $keteranganCorrectAnswer }}
    </div>
    <script src="{{asset('/js/timer.js')}}"></script>
@endif
</div>
