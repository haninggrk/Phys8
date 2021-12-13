
    <div class="container">
        <div class="row justify-content-center">
            <h1>Create new question image</h1>

            <!-- Content Row -->
            <div class="">
                <form action="{{ route('qimgs.store') }}" method="post">
                    {{ csrf_field() }}


                    <div class="form-group">
                        <label>question id :</label>

                        <select name="fis8_question_id" class="custom-select">

                            @foreach ($question as $cat)
                            <option value="{{$cat -> id}}">{{$cat -> question_text}}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label>Image ID :</label>

                        <select name="fis8_image_id" class="custom-select">

                            @foreach ($answer as $ans)
                            <option value="{{$ans -> id}}">{{$ans -> image}}</option>
                            @endforeach

                        </select>
                    </div>




                    <button type="submit" class="btn btn-success">Buat question image</button>
                </form>
            </div>

        </div>
    </div>
