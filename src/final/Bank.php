<?php
namespace App\final;
final class Bank
{
    private $users = [];

    public function __construct(private string $name)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function addUser(User $user): void
    {
        $this->users[] = $user;
    }

    public function getUsers(): array
    {
        return $this->users;
    }
}
