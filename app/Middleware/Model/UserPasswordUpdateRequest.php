<?php

namespace ProgrammerZamanNow\Belajar\PHP\MVC\Middleware\Model;

class UserPasswordUpdateRequest
{
    public ?string $id = null;
    public ?string $oldPassword = null;
    public ?string $newPassword = null;
}