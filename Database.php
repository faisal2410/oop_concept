<?php
class Database
{
    public $dbConnection;
    public $records;

    function openConnection(): bool {}
    function fetchRecord(): array {}

    function insertRecords($data): bool {}
    function updateRecords($id): bool {}
    function deleteRecords($id): bool {}
}
