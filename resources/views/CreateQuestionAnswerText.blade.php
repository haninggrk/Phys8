
    <div class="container">
        <div class="row justify-content-center">
            <h1>Create new level</h1>

            <!-- Content Row -->
            <div class="">
                <form action="{{ route('qatxts.store') }}" method="post">
                    {{ csrf_field() }}


                    <div class="form-group">
                        <label>is correct answer :</label>

                        <select name="is_correct_answer" class="custom-select">

                            <option value="0">0</option>
                            <option value="1">1</option>

                        </select>
                    </div>

                    <div class="form-group">
                        <label>Category :</label>

                        <select name="fis8_question_id" class="custom-select">

                            @foreach ($question as $cat)
                            <option value="{{$cat -> id}}">{{$cat -> question_text}}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label>Answer Option Text :</label>

                        <select name="fis8_answer_option_text_id" class="custom-select">

                            @foreach ($answer as $ans)
                            <option value="{{$ans -> id}}">{{$ans -> answer_option_text}}</option>
                            @endforeach

                        </select>
                    </div>




                    <button type="submit" class="btn btn-success">Buat level</button>
                </form>
            </div>

        </div>
    </div>
