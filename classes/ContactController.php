<?php

require_once __DIR__ . '/ContactForm.php';
require_once __DIR__ . '/Database.php';

class ContactController
{
    private ContactForm $form;
    private Database $database;
    private string $method;

    public function __construct(array $request, string $method = 'GET')
    {
        $this->form = new ContactForm($request);
        $this->database = new Database();
        $this->method = strtoupper($method);
    }

    public function handleRequest(): bool
    {
        if ($this->method !== 'POST') {
            return false;
        }

        if (!$this->form->validate()) {
            return false;
        }

        return $this->saveMessage();
    }

    public function getErrors(): array
    {
        return $this->form->getErrors();
    }

    public function getValue(string $key): string
    {
        return $this->form->getValue($key);
    }

    public function isConsentChecked(): bool
    {
        return $this->form->getValue('consent') !== '';
    }

    public function getCheckboxValue(): bool
    {
        return $this->isConsentChecked();
    }

    private function saveMessage(): bool
    {
        $stmt = $this->database->getConnection()->prepare(
            'INSERT INTO contact_messages (name, email, phone, message, consent) VALUES (:name, :email, :phone, :message, :consent)'
        );

        return $stmt->execute([
            ':name' => $this->form->getValue('name'),
            ':email' => $this->form->getValue('email'),
            ':phone' => $this->form->getValue('phone'),
            ':message' => $this->form->getValue('message'),
            ':consent' => $this->isConsentChecked() ? 1 : 0,
        ]);
    }
}

