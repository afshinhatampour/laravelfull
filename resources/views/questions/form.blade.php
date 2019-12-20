@csrf

<div class="form-group">

    <label for="question-title">Question title</label>

    <input type="text" value="{{ old('title', $question->title) }}" name="title" id="question-title"
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

        {{ old('body', $question->body) }}

    </textarea>

    @if ($errors->has('body'))

        <div class="text-danger">
            <strong>{{ $errors->first('body') }}</strong>
        </div>
        
    @endif

</div>

<div class="form-group">
    <button type="submit" class="btn btn-outline-primary btn-lg">{{ $buttonText }}</button>
</div>