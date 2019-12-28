<div class="row mt-5">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h2>{{ $answers_count . "" . str_plural('Answer', $question->answers_count) }}</h2>
                </div>
                <hr>
                @include('layouts.messages')
                @foreach ($answers as $answer)
                <div class="media">
                    <div class="d-flex flex-column vote-controls">
                        <a title="this answer is useful" class="vote-up">
                            <i class="fas fa-caret-up fa-3x"></i>
                        </a>
                        <span class="votes-count">514</span>
                        <a title="this-answer is noy useable" class="vote-down off">
                            <i class="fas fa-caret-down fa-3x"></i>
                        </a>
                        <a title="mark this answer as best answer" class="vote-accept vote-accepted mt-2">
                            <i class="fas fa-check"></i>
                        </a>
                        <span class="favorites-count">123</span>
                    </div>
                    <div class="media-body">
                        {!! $answer->body_html !!}
                        <div class="row">
                            <div class="col-4">
                                @if (Auth::user())
                                <div class="ml-auto row">
                                    @can('update', $answer)
                                    <a href="{{ route('questions.answer.edit', [$question->id, $answer->id]) }}"
                                        class="btn btn-sm btn-outline-info">Edit</a>
                                    @endcan
                                    @can('delete', $answer)
                                    <form
                                        action="{{ route('questions.answer.destroy', [$question->id, $answer->id]) }}"
                                        method="post">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger btn-sm"
                                            onclick="return confirm('Are you sure ?')">
                                            Delete
                                        </button>
                                    </form>
                                    @endcan
                                </div>
                                @endif
                                <div class="col-4">

                                </div>
                                <div class="col-4">
                                    <span class="text-muted">Answered {{ $answer->created_date }}</span>
                                    <div class="media mt-2">
                                        <a href="{{ $answer->user->url }}" class="pr-2">
                                            <img src="{{ $answer->user->avatar }}" alt="">
                                        </a>
                                        <div class="media-body mt-1">
                                            <a href="{{ $answer->user->url }}">{{ $answer->user->name }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                @endforeach
            </div>
        </div>
    </div>
</div>