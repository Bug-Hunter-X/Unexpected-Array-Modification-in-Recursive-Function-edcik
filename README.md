# PHP Recursive Function Bug

This repository demonstrates a subtle bug related to PHP's handling of arrays in recursive functions. The `processData` function intends to process an array recursively, converting string values to lowercase. However, due to how PHP handles arrays, the original array is unexpectedly modified.

The `bug.php` file contains the buggy code. The `bugSolution.php` file provides a corrected version that uses a copy of the array to avoid unintended side effects.

This example highlights the importance of understanding PHP's pass-by-reference behavior when working with arrays and recursive functions.