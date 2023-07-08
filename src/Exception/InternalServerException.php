<?php

namespace AsyncAws\Translate\Exception;

use AsyncAws\Core\Exception\Http\ClientException;

/**
 * An internal server error occurred. Retry your request.
 */
final class InternalServerException extends ClientException
{
}
