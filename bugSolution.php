```php
function calculate_average($numbers) {
  if (empty($numbers)) {
    return 0; // Handle empty array
  }

  $sum = array_sum($numbers);
  $count = count($numbers);
  return $sum / $count;
}

$numbers = [10, 20, 30, 0];
$average = calculate_average($numbers);
echo "Average: " . $average; //This will output 15

$numbers2 = [10,20,30];
$average2 = calculate_average($numbers2);
echo "\nAverage2: " . $average2; //This will output 20

$numbers3 = [];
echo "\nAverage3: ". calculate_average($numbers3); //This will output 0

```