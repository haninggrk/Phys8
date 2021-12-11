
    <div class="container">
        <div class="row justify-content-center">
            <h1>Create new question</h1>

            <!-- Content Row -->
            <div class="">
                <form action="{{ route('questions.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Question : </label>
                        <input type="text" class="form-control" name="question_text" required>
                    </div>

                    <div class="form-group">
                        <label>Image Answer : </label>
                        <input type="text" class="form-control" name="is_image_answer" required>
                    </div>

                    <div class="form-group">
                        <label>Discussion : </label>
                        <input type="text" class="form-control" name="discussion" required>
                    </div>



                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Buat Question</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
