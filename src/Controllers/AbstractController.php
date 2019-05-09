<?php

namespace CrCms\Foundation\Controllers;

use CrCms\Foundation\Foundation\InstanceTrait;
use CrCms\Foundation\Response\Factory as ResponseFactory;
use Illuminate\Routing\Controller as BaseController;

abstract class AbstractController extends BaseController
{
    use InstanceTrait;

    /**
     * @var
     */
    protected $repository;

    /**
     * @var ResponseFactory
     */
    protected $response;

    /**
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function __construct()
    {
        $this->response = $this->response();
    }

    /**
     * @return ResponseFactory
     *
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    protected function response(): ResponseFactory
    {
        return $this->make(ResponseFactory::class);
    }
}
