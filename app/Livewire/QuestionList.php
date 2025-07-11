<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Question;
use App\Models\Option;
use Livewire\WithPagination;

class QuestionList extends Component
{
    use WithPagination;
    
    public $code;
    public function mount($code)
    {
        $this->code = $code;
    }

    public function render()
    {

        $codeQ = $this->code;
        $questionIds = Question::select('id')->where('code_quiz', $codeQ)->get(); // kayjib ga3 les id
        $options = Option::whereIn('question_id', $questionIds)->paginate(4);
        $questions = Question::where('code_quiz', $codeQ)->paginate(1);

        return view('livewire.question-list', [
            'questions' => $questions,
            'options' => $options
        ]);
    }

    public $counter = 1;
    public function goToNextPage()
    {
        $this->reset(['selectedId', 'color', 'disabled', 'correctOptionId', 'checkCustom']);
        $this->counter++;
        $this->nextPage();
    }

    public $color = 'white';
    public $selectedId = null;
    public $score = 0;
    public $disabled = false;
    public $correctOptionId = null;

    public $checkCustom = 'none' ;

    public function checkOption($optionId)
{
    $this->selectedId = $optionId;
    $this->disabled = true; // Lock options

    $option = Option::find($optionId);

    $this->correctOptionId = Option::where('question_id', $option->question_id) // id correct Answer
        ->where('is_correct', 1)
        ->value('id');

    if ($option && $option->is_correct) {
        $this->color = 'green';
        $this->score++;
        $this->checkCustom = 'custom_correct';
    } else {
        $this->color = 'red';
        $this->checkCustom = 'custom_incorrect';
    }
}
}