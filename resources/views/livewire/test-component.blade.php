<div>
    <div class="container">
        <h2 class="title">Тестирование</h2>

        @if(!$testFinished)
            <h2 class="medium-title">{{ $test->name }}</h2>
            <p class="desc">{{ $test->description }}</p>

            <h3 class="small-title">Вопрос {{ $currentQuestionIndex + 1 }} / {{ count($test->questions) }}</h3>
            <p class="desc">{{ $question->question_text }}</p>

            <ul>
                @foreach($question->answers as $answer)
                    <li>
                        <button wire:click="answerQuestion({{ $answer->id }})"
                            class="test-button">
                            {{ $answer->answer_text }}
                        </button>
                    </li>
                @endforeach
            </ul>
        @else
            <h2 class="medium-title">Тест завершен!</h2>
            <p class="desc">Результат: {{ $testResult->score }} правильных ответов из {{ $testResult->total_questions }}</p>

            @if($testResult->score > ($testResult->total_questions / 2))
                <p class="desc green-text">Поздравляем! Вы хорошо знаете материал.</p>
            @else
                <p class="desc">Рекомендуем повторить материал.</p>
            @endif
        @endif
    </div>

</div>