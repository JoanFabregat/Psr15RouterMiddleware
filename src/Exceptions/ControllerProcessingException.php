<?php
//
// +---------------------------------------------------------------------+
// | CODE INC. SOURCE CODE                                               |
// +---------------------------------------------------------------------+
// | Copyright (c) 2018 - Code Inc. SAS - All Rights Reserved.           |
// | Visit https://www.codeinc.fr for more information about licensing.  |
// +---------------------------------------------------------------------+
// | NOTICE:  All information contained herein is, and remains the       |
// | property of Code Inc. SAS. The intellectual and technical concepts  |
// | contained herein are proprietary to Code Inc. SAS are protected by  |
// | trade secret or copyright law. Dissemination of this information or |
// | reproduction of this material is strictly forbidden unless prior    |
// | written permission is obtained from Code Inc. SAS.                  |
// +---------------------------------------------------------------------+
//
// Author:   Joan Fabrégat <joan@codeinc.fr>
// Date:     03/07/2018
// Time:     14:31
// Project:  Psr15RouterMiddleware
//
declare(strict_types=1);
namespace CodeInc\Psr15RouterMiddleware\Exceptions;
use CodeInc\Psr15RouterMiddleware\ControllerInterface;
use Throwable;


/**
 * Class ControllerProcessingException
 *
 * @package CodeInc\Psr15RouterMiddleware\Exceptions
 * @author Joan Fabrégat <joan@codeinc.fr>
 */
class ControllerProcessingException extends RouterMiddlewareException
{
    /**
     * @var ControllerInterface
     */
    private $controller;

    /**
     * ControllerProcessingException constructor.
     *
     * @param ControllerInterface $controller
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(ControllerInterface $controller, int $code = 0, ?Throwable $previous = null)
    {
        $this->controller = $controller;
        parent::__construct(
            sprintf("Error while processing the controller '%s'", get_class($controller)),
            $code,
            $previous
        );
    }

    /**
     * @return ControllerInterface
     */
    public function getController():ControllerInterface
    {
        return $this->controller;
    }
}