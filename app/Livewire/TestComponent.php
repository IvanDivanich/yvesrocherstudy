<?php

namespace App\Livewire;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Test;
use App\Models\UserAnswer;
use App\Models\UserTestResult;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TestComponent extends Component
{
    public $test;
    public $currentQuestionIndex = 0;
    public $userAnswers = [];
    public $testResult;
    public $testFinished = false;

    public function mount($testId)
    {
        $this->test = Test::with('questions.answers')->findOrFail($testId);

        //Создаем запись о начале теста
        $this->testResult = UserTestResult::create([
            'user_id' => Auth::id(),
            'test_id' => $this->test->id,
            'start_time' => Carbon::now(),
            'total_questions' => $this->test->questions()->count(),
            'status' => 'in_progress'
        ]);
    }

    public function answerQuestion($answerId)
    {
        $question = $this->test->questions[$this->currentQuestionIndex];

        //Проверяем правильный ли ответ
        $answer = Answer::find($answerId);
        $isCorrect = $answer->is_correct;

        UserAnswer::create([
            'user_test_result_id' => $this->testResult->id,
            'question_id' => $question->id,
            'answer_id' => $answerId,
            'is_correct' => $isCorrect
        ]);

        $this->userAnswers[$question->id] = $answerId;

        if ($this->currentQuestionIndex < count($this->test->questions) - 1) {
            $this->currentQuestionIndex++;
        } else {
            $this->finishTest();
        }
    }

    public function finishTest()
    {
        $this->testFinished = true;
        $this->testResult->end_time = Carbon::now();
        $this->testResult->status = 'completed';
        $this->testResult->score = UserAnswer::where('user_test_result_id', $this->testResult->id)->where('is_correct', true)->count();
        $this->testResult->save();
    }

    public function render()
    {
        return view('livewire.test-component', [
            'question' => $this->test->questions[$this->currentQuestionIndex],
        ]);
    }
}
