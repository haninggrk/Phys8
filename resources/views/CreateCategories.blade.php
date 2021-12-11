
    <div class="container">
        <div class="row justify-content-center">
            <h1>Create new category</h1>

            <!-- Content Row -->
            <div class="">
                <form action="{{ route('cats.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Name : </label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label>Description: </label>
                        <input type="text" class="form-control" name="description" required>
                    </div>


                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Buat category</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
