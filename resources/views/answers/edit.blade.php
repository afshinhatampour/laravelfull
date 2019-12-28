@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h1>Editing answer for question <strong>{{ $question->title }}</strong></h1>
                    </div>
                    <hr>
                    <form method="post" action="{{ route('questions.answer.update', [$question->id, $answer->id]) }}">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <textarea class="form-control" rows="7" name="body">
                                    {{ old('body', $answer->body) }}
                                </textarea>

                            @if($errors->has('body'))
                            <div class="text-danger">
                                <strong>{{ $errors->first('body') }}</strong>
                            </div>
                            @endif

                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-outline-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection