# PHP: Unexpected Behavior with Default Function Arguments and Null Values

This repository demonstrates a subtle bug in PHP related to default function arguments and how null values are handled.  The issue arises from PHP's loose typing system and how comparisons against NULL can sometimes lead to unintended outcomes.

The `bug.php` file contains a function with a default argument. While the intent might seem clear, the behavior might be unexpected due to PHP's type juggling.

The `bugSolution.php` file presents a more robust solution illustrating how to avoid these potential pitfalls.  It emphasizes the importance of strict type comparisons and clarifies the expected behavior.

This example highlights the need for careful attention to detail when dealing with default parameters and null checks in PHP to prevent unexpected results and maintain code stability.