<div>
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
       <div><button  @if($keterangaCorrectAnswer=="")
wire:click="saveUserAnswer({{ $myQuestions->id }}, '{{ $AnswerOptions->pivot->option}}')" @endif> {{$AnswerOptions->pivot->option}}.  {{$AnswerOptions->option_text}}
</button></div>
       @endforeach
    </div>
  @endif
    <div>
        {{ $keterangaCorrectAnswer }}
    </div>
</div>