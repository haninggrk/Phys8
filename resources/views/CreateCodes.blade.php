
    <div class="container">
        <div class="row justify-content-center">
            <h1>Create new codes</h1>

            <!-- Content Row -->
            <div class="">
                <form action="{{ route('codes.store') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Code : </label>
                        <input type="text" class="form-control" name="code" required>
                    </div>



                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Buat Code</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
