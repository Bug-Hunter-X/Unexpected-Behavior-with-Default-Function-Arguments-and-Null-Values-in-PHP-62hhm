```php
function my_function($arg1, $arg2 = null) {
  if (!isset($arg2)) {
    $arg2 = 'default';
  }
  // ... rest of the function
}

my_function(1);
my_function(1, 2);
```