# PHP Division by Zero Error in Average Calculation

This repository demonstrates a common error in PHP: division by zero when calculating the average of an array of numbers. The error occurs when the input array is empty, causing the `count()` function to return 0, resulting in division by zero. The solution provided addresses this issue by first checking for an empty array before performing the calculation.

## Bug Description

The original `calculate_average()` function did not handle the case where the input array `$numbers` is empty.  This led to a division by zero error when an empty array was passed in.

## Solution

The solution checks for an empty array before performing the calculation. If the array is empty, the function returns 0; otherwise, it proceeds with the average calculation.