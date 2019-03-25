<div class="row mt-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h2>{{ $answersCount . " " . str_plural('Answer', $question->answers_count) }}</h2>
                </div>
                <hr />
                @include('layouts._messages')

                @foreach($answers as $answer)
                    <div class="media">
                        <div class="d-flex flex-column vote-controls">
                            <a title="This question is useful"
                               class="vote-up">
                                <font-awesome-icon icon="caret-up"
                                                   size="3x"></font-awesome-icon>
                            </a>
                            <span class="votes-count">1230</span>
                            <a title="This question is not useful"
                               class="vote-down off">
                                <font-awesome-icon icon="caret-down"
                                                   size="3x"></font-awesome-icon>
                            </a>
                            <a title="Mark this as the best answer"
                               class="vote-accepted mt-2">
                                <font-awesome-icon icon="check"
                                                   size="2x"></font-awesome-icon>
                            </a>

                        </div>

                        <div class="media-body">
                            {!! $answer->body_html !!}
                            <div class="float-right">
                                <span class="text-muted">Answered {{ $answer->created_date }}</span>
                                <div class="media mt-2">
                                    <a href="{{ $answer->user->url }}"
                                       class="pr-2"><img src="{{ $answer->user->avatar }}"></a>
                                    <div class="media-body mt-1">
                                        <a href="{{$answer->user->url}}">
                                            {{ $answer->user->name }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr />
                @endforeach
            </div>
        </div>
    </div>
</div>
