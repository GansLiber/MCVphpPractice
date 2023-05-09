<?php

namespace Validators;

use Src\Validator\AbstractValidator;

class ValidateDigits extends AbstractValidator
{
    protected string $message = 'Field :Использовать только цифры для ввода';

    public function rule(): bool
    {
        return ctype_digit($this->value);
    }
}