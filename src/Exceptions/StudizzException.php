<?php

namespace AmphiBee\Studizz\Exceptions;

use Exception;
use ReturnTypeWillChange;

/**
 * Represents a custom exception for the Studizz application.
 *
 * @package AmphiBee\Studizz\Exceptions
 */
class StudizzException extends Exception
{
    /**
     * Constructs a new instance of the StudizzException.
     *
     * @param string $message The error message to be associated with the exception.
     * @param int $code The error code to be associated with the exception.
     * @param ?Exception $previous The previous exception that caused this exception.
     */
    public function __construct(string $message = '', int $code = 0, ?Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    /**
     * Returns a string representation of the exception.
     *
     * @return string A string containing the exception class, code, and message.
     */
    #[ReturnTypeWillChange] public function __toString()
    {
        return __CLASS__.": [{$this->code}]: {$this->message}\n";
    }
}
