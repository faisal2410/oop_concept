<?php
interface Readable
{
    public function read();
}

interface Writable
{
    public function write();
}

trait Readability
{
    public function read() {

    }
}

trait Writeability
{
    public function write() {

    }
}

class RegularFile implements Readable, Writable {
    use Readability;
    use Writeability;
}

class ReadOnlyFile implements Readable {
    use Readability;
}

class FileProcessor {
    public function writeToFile(Writable $file)
    {
        $file->write();
    }
}