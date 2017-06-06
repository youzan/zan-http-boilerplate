<?php

namespace {{NAMESPACE}}Controller\Test;

use Zan\Framework\Foundation\Domain\HttpController as Controller;
use Zan\Framework\Network\Http\Exception\InvalidRouteException;
use Zan\Framework\Network\Http\Exception\PageNotFoundException;
use Zan\Framework\Network\Http\Exception\RedirectException;

class ExceptionController extends Controller
{
    public function testInvalidRoute()
    {
        throw new InvalidRouteException();
    }

    public function testPageNotFound()
    {
        throw new PageNotFoundException('This Page is not Found');
    }

    public function testRedirect()
    {
        throw new RedirectException('https://youzan.com', 'Test Redirect');
    }
}
