


<div>



@foreach($DataQuestionFromLevelId as $Data)
        <button wire:click="getQuestionWithId({{$Data->id}})">
       
            Nomor {{ $loop->iteration }}
        
        </button>
       
        @endforeach
        @if($myQuestions != null)
    <div>Soal</div>
    <div>
        {{ $myQuestions->question_text }}

        <p>Pilihan Jawaban</p>
       @foreach($myQuestions->answerOptions as $AnswerOptions)
       <a wire:click="saveUserAnswer( {{ $myQuestions->question_text }})"> {{$AnswerOptions->pivot->option}}.  {{$AnswerOptions->option_text}}<a>
       @endforeach
    </div>
  @endif

</div>

