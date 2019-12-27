    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h3>Your answer</h3>
                    </div>
                    <hr>
                    <form method="post" action="{{ route('questions.answer.store', $question->id) }}">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control" rows="7" name="body"></textarea>

                            @if($errors->has('body'))
                                <div class="text-danger">
                                    <strong>{{ $errors->first('body') }}</strong>
                                </div>
                            @endif

                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-outline-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>