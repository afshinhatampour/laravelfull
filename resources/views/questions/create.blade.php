@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h2>All questions</h2>
                        <div class="ml-auto">
                            <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary">
                                Back to all question
                            </a>
                        </div>
                    </div>
                </div>

                <div class="card-body">

                    <form action="{{ route('questions.store') }}" method="post">

                        @csrf

                        <div class="form-group">

                            <label for="question-title">Question title</label>

                            <input type="text" value="{{ old('title') }}" name="title" id="question-title"
                                class="form-control">

                            @if ($errors->has('title'))
                            <div class="text-danger">
                                <strong>{{ $errors->first('title') }}</strong>
                            </div>
                            @endif

                        </div>

                        <div class="form-group">

                            <label for="question-bodu">Explaine your question</label>

                            <textarea name="body" id="question-body" class="form-control" rows="10">

                                {{ old('body') }}

                            </textarea>

                            @if ($errors->has('body'))
                            <div class="text-danger">
                                <strong>{{ $errors->first('body') }}</strong>
                            </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-primary btn-lg">Ask this question</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection