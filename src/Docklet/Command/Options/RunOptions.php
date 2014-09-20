<?php
/**
 * Docklet (http://slopjong.github.io/docklet)
 *
 * @link      http://github.com/slopjong/docklet for the canonical source repository
 * @copyright Copyright (c) 2014 Romain Schmitz (http://slopjong.de)
 * @license   http://slopjong.github.io/docklet/license/new-bsd New BSD License
 */

namespace Docklet\Command\Options;


use Zend\Debug\Debug;

/**
 * <strong>The</strong> run options.
 *
 * @package Docklet\Command
 *
 * @method RunOptions daemon(boolean $daemon)
 * @method RunOptions ttyMode(boolean $mode)
 * @method RunOptions interactive(boolean $interactive)
 * @method RunOptions image(string $image)
 * @method RunOptions command(mixed $command)
 * @method RunOptions volumes(array $volumes)
 *
 */
class RunOptions
{
    public $daemon = false;
    public $ttyMode = false;
    public $interactive = false;
    public $image = '';
    public $command = '';
    public $volumes = array();

    public function __call($method, $params)
    {
        $this->$method = $params[0];
        return $this;
    }
}
