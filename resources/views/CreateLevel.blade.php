
    <div class="container">
        <div class="row justify-content-center">
            <h1>Create new level</h1>

            <!-- Content Row -->
            <div class="">
                <form action="{{ route('levels.store') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>Name : </label>
                        <input type="text" class="form-control" name="name" required>
                    </div>

                    <div class="form-group">
                        <label>Category :</label>

                        <select name="fis8_category_id" class="custom-select">

                            @foreach ($category as $cat)
                            <option value="{{$cat -> id}}">{{$cat -> name}}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="form-group">
                        <label>Thumbnail : </label>
                        <input type="text" class="form-control" name="thumbnail" required>
                    </div>

                    <div class="form-group">
                        <label>Description : </label>
                        <input type="text" class="form-control" name="description" required>
                    </div>

                    <div class="form-group">
                        <label>Score Reward : </label>
                        <input type="text" class="form-control" name="score_reward" required>
                    </div>

                    <div class="form-group">
                        <label>Ticket Reward : </label>
                        <input type="text" class="form-control" name="ticket_reward" required>
                    </div>

                    <div class="form-group">
                        <label>Money Reward : </label>
                        <input type="text" class="form-control" name="money_reward" required>
                    </div>

                    <div class="form-group">
                        <label>Maximum Time : </label>
                        <input type="text" class="form-control" name="maximum_time" required>
                    </div>



                    <button type="submit" class="btn btn-success">Buat level</button>
                </form>
            </div>

        </div>
    </div>
