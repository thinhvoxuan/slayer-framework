<?php
/**
 * PhalconSlayer\Framework
 *
 * @copyright 2015-2016 Daison Carino <daison12006013@gmail.com>
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      http://phalconslayer.readme.io
 */

/**
 * @package Clarity
 * @subpackage Clarity\Support\Phinx\Console\Command
 */
namespace Clarity\Support\Phinx\Console\Command;

use Phinx\Console\Command\Rollback as BaseRollback;
use Clarity\Support\Phinx\Console\Command\Traits\ConfigurationTrait;

class Rollback extends BaseRollback
{
    use ConfigurationTrait;

    protected function configure()
    {
        parent::configure();

        $this->setName('db:rollback');
    }
}
