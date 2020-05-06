<?php

declare(strict_types=1);

namespace Uetiko\Coupons\Shared\Domain\Error;

use DomainException;
use Throwable;

abstract class DomainError extends DomainException
{
    protected string $errorCode;
    protected string $errorMessage;

    protected function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return string
     */
    abstract public function errorCode(): string;

    /**
     * @return string
     */
    abstract public function errorMessage(): string;
}