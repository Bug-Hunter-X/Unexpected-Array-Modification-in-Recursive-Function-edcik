```php
<?php
function processData(array $data): array {
  $newData = []; // Create a copy of the array
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $newData[$key] = processData($value); // Recursive call on the copy
    } else if (is_string($value)) {
      $newData[$key] = strtolower($value); // Convert to lowercase
    } else {
      $newData[$key] = $value; //Keep other data types as they are
    }
  }
  return $newData;
}

$data = [
  "Name" => "John Doe",
  "Age" => 30,
  "Address" => [
    "Street" => "123 Main St",
    "City" => "Anytown",
  ],
];

$processedData = processData($data);
print_r($processedData);
print_r($data); // Original array remains unchanged
?>
```