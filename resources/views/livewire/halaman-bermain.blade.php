<div>
    @foreach ($getFt as $Ghb)
                <button wire::click = 'gotoquiz({{  $Ghb -> id}})'> $loop -> iteration</button>
            @endforeach

            @foreach ($getO as $Ghb)
            <button wire::click = 'gotoquiz({{  $Ghb -> id}})'> $Ghb -> name</button>
        @endforeach
</div>
