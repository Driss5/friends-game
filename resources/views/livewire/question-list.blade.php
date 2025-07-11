<div class="containerr">
    <div class="cardd-center">
        <div class="cardd">
            <div class="card-header ">
                <div>
                    <p>Question <span id="question">{{$counter}}/4</span></p>
                </div>
                <div class="cardd-score">
                    <p>Score : <span>{{$score}}</span></p>
                </div>
            </div>
            @foreach ($questions as $q)
                <div class="cardd-question">
                    <p>{{ $q->question }}</p>
                </div>
            @endforeach
            <div class="cardd-options">
                @foreach ($options as $option)
                    <div
                        class="cardd-question"
                        wire:click="checkOption({{ $option->id }})"
                        style="
                            background-color:
                                {{ $disabled
                                    ? ($option->id == $selectedId
                                        ? $color
                                        : ($option->id == $correctOptionId ? 'green' : 'white'))
                                    : 'white'
                                }};
                            pointer-events: {{ $disabled ? 'none' : 'auto' }};
                            opacity: {{ $disabled ? '0.7' : '1' }};
                        "
                    >
                        {{ $option->options }}
                    </div>
                @endforeach

            </div>
            <div class="cardd-custom-mssg pt-4 ps-3">

                @if ($checkCustom === 'custom_correct')
                    <p>Message From : {{ $q->custom_correct }}</p>
                @elseif ($checkCustom === 'custom_incorrect')
                    <p>Message From : {{ $q->custom_incorrect }}</p>
                @endif

            </div>
            <div class="cardd-next-btn">
                    @if ($questions->hasMorePages())
                        <button wire:click="goToNextPage" wire:click="nextPage" onclick="handleAdd()">Next Question</button>                      
                    @else
                        <button><a href="{{ route('score', ['score' => $score, 'code' => $code]) }}">Finish</a></button>
                    @endif
            </div>
        </div>
    </div>
</div>  
