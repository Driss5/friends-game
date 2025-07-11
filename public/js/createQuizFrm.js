let questions = [
    {
        questionNumber : 'Question 1',
    },
    {
        questionNumber : 'Question 2',
    },
    {
        questionNumber : 'Question 3',
    },
    {
        questionNumber : 'Question 4',
    },
    {
        questionNumber : 'Question 5',
    }
];

function showQuestions() {
    let questionCont = document.getElementsByClassName('question-cont')[0];
    let questionsJ = ''
    for (let i = 0; i < questions.length; i++) { 

    questionsJ += `
        <div class="question">
            <div class="question-header-drop">
            <p>${questions[i].questionNumber}</p>
            </div>
            <div class="question-body">
                <div>
                <label class="form-label">Question</label>
                <input type="text" name="questions[${i}][text]" placeholder="Question ${i+1}" class="form-control" required>
                </div>

                <div class="options mt-2">
                    ${[0,1,2,3].map(idx => `
                        <input
                        type="text"
                        name="questions[${i}][options][${idx}]"
                        class="form-control opt"
                        placeholder="Option ${idx + 1}" required
                        >
                    `).join('')}
                </div>

                <div>
                    <label class="form-label">The Correct Answer</label>
                    <select name="questions[${i}][correct]" class="form-select">
                        ${[0,1,2,3].map(idx => `
                            <option value="${idx}">Option ${idx + 1}</option>
                        `).join('')}
                    </select>
                </div>

                <div class="custom-mssgs">
                <div>
                    <label class="form-label">Custom Message If True</label>
                    <input type="text" name="questions[${i}][msg_true]" class="form-control" required>
                </div>
                <div>
                    <label class="form-label">Custom Message If False</label>
                    <input type="text" name="questions[${i}][msg_false]" class="form-control" required>
                </div>
                </div>
            </div>
            <div class="space"></div>
        </div>
    `;
}
    questionCont.innerHTML = questionsJ;
}
showQuestions();

function activateToggles() {
  const allQuestions = document.querySelectorAll('.question');

  allQuestions.forEach(question => {
    const header = question.querySelector('.question-header-drop');
    const inputs = question.querySelectorAll('.opt');
    const select = question.querySelector('select');

    function updateSelectOptions() {
      select.innerHTML = '';
      inputs.forEach(input => {
        const value = input.value.trim();
        if (value !== '') {
          const option = document.createElement('option');
          option.text = value;
          option.value = [...inputs].indexOf(input);
          select.appendChild(option);
        }
      });
    }

    inputs.forEach(input => {
      input.addEventListener('input', updateSelectOptions);
    });

    updateSelectOptions();

    // toggle simple
    header.addEventListener('click', () => {
        allQuestions.forEach(q => q.classList.remove('open'));
        question.classList.add('open');
    });
  });
}
activateToggles();
