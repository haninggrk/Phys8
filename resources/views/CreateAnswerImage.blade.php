
    <div class="container">
        <div class="row justify-content-center">
            <h1>Create new level</h1>

            <!-- Content Row -->
            <div class="">
                <form action="{{ route('qansimgs.store') }}" method="post">
                    {{ csrf_field() }}


                    <div class="form-group">
                        <label>is correct answer :</label>

                        <select name="is_correct_answer" class="custom-select">

                            <option value="0">0</option>
                            <option value="1">1</option>

                        </select>
                    </div>

                    <div class="form-group">
                        <label>Question ID :</label>

                        <select name="fis8_question_id" class="custom-select">

                            @foreach ($question as $quest)
                            <option value="{{$quest -> id}}">{{$quest -> question_text}}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label>Answer Option Image ID :</label>

                        <select name="fis8_image_id" class="custom-select">

                            @foreach ($image as $img)
                            <option value="{{$img -> id}}">{{$img -> image}}</option>
                            @endforeach

                        </select>
                    </div>




                    <button type="submit" class="btn btn-success">Buat Answer Image ID</button>
                </form>
            </div>

        </div>
    </div>
