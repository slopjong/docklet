<?php
/**
 * Docklet (http://slopjong.github.io/docklet)
 *
 * @link      http://github.com/slopjong/docklet for the canonical source repository
 * @copyright Copyright (c) 2014 Romain Schmitz (http://slopjong.de)
 * @license   http://slopjong.github.io/docklet/license/new-bsd New BSD License
 */

namespace Docklet\Command;


use Docklet\Container\Container;
use Zend\Http\Request;

/**
 * Class Create
 *
 * @package Docklet\Command
 * @link https://docs.docker.com/reference/api/docker_remote_api_v1.14/#create-a-container
 */
class Create extends AbstractCommand
{
    /**
     * @var Container
     */
    protected $container = null;

    /**
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->container = $container;
        $this->setMethod(Request::METHOD_POST);
        $this->setCommand('containers/create');
        $this->setContent($container->toJson());
    }

    /**
     * @inheritdoc
     */
    public function execute()
    {
        $this->getUri()->setPath($this->command);
        return $this;
    }
}