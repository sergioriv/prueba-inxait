<?php

namespace App;

class Message
{
    public const SUCCESS = 'success';
    public const FAIL = 'warning';
    public const INFO = 'info';
    public const QUESTION = 'question';

    /**
     * @param string $type values: success, warning, info, question
     */
    function __construct(public string $type, public string $message) { /* */ }
}
