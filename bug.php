```php
$data = file_get_contents('some_large_file.txt');
// ... process $data ...
```

This code is vulnerable to a common error: it attempts to read the entire contents of a potentially very large file into memory at once.  If `some_large_file.txt` is larger than the available memory, this will lead to a fatal error or an out-of-memory condition. 