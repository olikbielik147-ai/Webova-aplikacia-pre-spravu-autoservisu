<?php

require_once __DIR__ . '/ContactForm.php';

class ContactController
{
    private ContactForm $form;

    public function __construct(array $request)
    {
        $this->form = new ContactForm($request);
    }

    public function handleRequest(): bool
    {
        return $this->form->validate();
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
        return $this->form->requestValue('consent') !== '';
    }

    public function getCheckboxValue(): bool
    {
        return $this->isConsentChecked();
    }
}

