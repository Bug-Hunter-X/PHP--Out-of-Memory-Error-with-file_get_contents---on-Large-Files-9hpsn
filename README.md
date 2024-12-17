# PHP: Handling Large Files Efficiently

This repository demonstrates a common error in PHP when dealing with large files and provides a solution.  Improperly reading large files can lead to out-of-memory errors and application crashes.

## The Problem

The `file_get_contents()` function reads an entire file into a string.  While convenient for smaller files, it's highly inefficient and memory-intensive for large files.  If the file size exceeds available memory, a fatal error occurs.

## The Solution

The solution involves using a more memory-efficient approach, such as reading and processing the file in smaller chunks.