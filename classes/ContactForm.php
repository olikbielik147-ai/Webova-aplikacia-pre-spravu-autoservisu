<?php

class ContactForm
{
    private array $data;
    private array $errors = [];

    public function __construct(array $data = [])
    {
        $this->data = array_map(static function ($value) {
            return is_string($value) ? trim($value) : $value;
        }, $data);
    }

    public function validate(): bool
    {
        $name = $this->getValue('name');
        $email = $this->getValue('email');
        $message = $this->getValue('message');
        $consent = isset($this->data['consent']);

        if ($name === '' || mb_strlen($name) < 2) {
            $this->errors['name'] = 'Meno musí mať aspoň 2 znaky.';
        }

        if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = 'Zadajte platný email.';
        }

        if ($message === '' || mb_strlen($message) < 10) {
            $this->errors['message'] = 'Správa musí mať aspoň 10 znakov.';
        }

        if (!$consent) {
            $this->errors['consent'] = 'Musíte súhlasiť so spracovaním údajov.';
        }

        return empty($this->errors);
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function getValue(string $key): string
    {
        return isset($this->data[$key]) && is_string($this->data[$key]) ? trim($this->data[$key]) : '';
    }
}

