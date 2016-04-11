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
 * @subpackage Clarity\Support\Phinx\Db
 */
namespace Clarity\Support\Phinx\Db;

use Phinx\Db\Table as PhinxTable;

class Table extends PhinxTable
{
    public function addSoftDeletes()
    {
        $this
            ->addColumn('deleted_at', 'timestamp', [
                'null' => true,
            ]);

        return $this;
    }
}
