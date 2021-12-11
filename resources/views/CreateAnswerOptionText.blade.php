
    <div class="container">
        <div class="row justify-content-center">
            <h1>Create Answer Option Text</h1>

            <!-- Content Row -->
            <div class="">
                <form action="{{ route('opttxts.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Answer Option text : </label>
                        <input type="text" class="form-control" name="answer_option_text" required>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Buat Answer Option Text</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
