```php
function processLargeFile($filepath) {
    $handle = fopen($filepath, 'r');
    if ($handle === false) {
        throw new Exception("Unable to open file: $filepath");
    }

    while (($buffer = fgets($handle, 4096)) !== false) {
        // Process the $buffer (4KB chunk) here
        // ... your code to process each chunk ...
        echo $buffer;
    }

    fclose($handle);
}

processLargeFile('some_large_file.txt');
```
This revised code reads the file in 4KB chunks, processing each chunk before reading the next. This dramatically reduces memory usage and prevents out-of-memory errors, making it suitable for handling files of virtually any size.