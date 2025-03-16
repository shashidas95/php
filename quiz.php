<?php

function evaluateQuiz(array $question_set, array $answers): int
{
 $score = 0;
 foreach ($question_set as $index => $questions) {
  if ($answers[$index] === $questions['correct']) {
   $score++;
  }
 }
 return $score;
}

$question_set = [['question' => "what is '2+2'?", "correct" => "4"], ['question' => "what is '2*2'?", "correct" => "4"], ['question' => "what is '2/2'?", "correct" => "1"]];

// print_r($question_set);

$answers = [];
foreach ($question_set as $index => $questions) {
 // print_r($questions);
 echo  $questions['question'] . "\n";
 $answers[] = trim(readline("your answer: "));
}
$final_score = evaluateQuiz($question_set, $answers);
if ($final_score === count($question_set)) {
 echo "excellent";
} else {
 echo "try again";
}
// print_r($answers);
// echo $answers[$index];
