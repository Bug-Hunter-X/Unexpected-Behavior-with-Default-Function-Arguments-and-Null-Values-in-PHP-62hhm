```php
function my_function($arg1, $arg2 = null) {
  if ($arg2 === null) {
    $arg2 = 'default'; 
  }
  // ... rest of the function
}

my_function(1);
my_function(1, 2);
```