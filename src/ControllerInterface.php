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
// Time:     13:03
// Project:  Psr15RouterMiddleware
//
declare(strict_types=1);
namespace CodeInc\Psr15RouterMiddleware;
use Psr\Http\Message\ResponseInterface;


/**
 * Interface ControllerInterface
 *
 * @package CodeInc\Psr15RouterMiddleware
 * @author Joan Fabrégat <joan@codeinc.fr>
 */
interface ControllerInterface
{
    /**
     * Executes the controller. This method must returns a PSR-7 response or throw an exception.
     *
     * @return ResponseInterface
     */
    public function getResponse():ResponseInterface;

    /**
     * Returns the controller's URI path.
     *
     * @return string
     */
    public static function getUriPath():string;
}