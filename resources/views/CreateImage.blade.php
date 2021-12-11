
    <div class="container">
        <div class="row justify-content-center">
            <h1>Create new image</h1>

            <!-- Content Row -->
            <div class="">
                <form action="{{ route('images.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Image : </label>
                        <input type="text" class="form-control" name="image" required>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Buat Image</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
