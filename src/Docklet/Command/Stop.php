<?php
/**
 * Docklet (http://slopjong.github.io/docklet)
 *
 * @link      http://github.com/slopjong/docklet for the canonical source repository
 * @copyright Copyright (c) 2014 Romain Schmitz (http://slopjong.de)
 * @license   http://slopjong.github.io/docklet/license/new-bsd New BSD License
 */

namespace Docklet\Command;


use Zend\Http\Headers;
use Zend\Http\Request;
use Zend\Http\Response;


/**
 * Class Stop
 *
 * @package Docklet\Command
 * @link https://docs.docker.com/reference/api/docker_remote_api_v1.14/#stop-a-container
 */
class Stop extends AbstractCommand
{
    public function __construct($id, $wait = 10)
    {
        $this->setMethod(Request::METHOD_POST);
        $this->setCommand('containers/' . $id . '/stop');
        $this->getUri()->setQuery(array('t' => $wait));
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