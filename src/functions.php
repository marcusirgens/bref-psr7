<?php declare(strict_types=1);

use MarcusIrgens\BrefPsr7\Psr7Handler;

/**
 * @param callable $handler This callable takes a $request parameter
 *                          (ServerRequestInterface) and must return a PSR-7
 *                          ResponseInterface
 *
 * @see \Psr\Http\Message\ServerRequestInterface
 * @see \Psr\Http\Message\ResponseInterface
 */
function lambda_psr7(callable $handler): void
{
    $psr7Handler = new Psr7Handler($handler);
    lambda($psr7Handler);
}
