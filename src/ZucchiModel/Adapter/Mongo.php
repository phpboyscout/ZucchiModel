<?php
/**
 * Mongo.php - (http://zucchi.co.uk) 
 *
 * @link      http://github.com/zucchi/{PROJECT_NAME} for the canonical source repository
 * @copyright Copyright (c) 2005-2013 Zucchi Limited. (http://zucchi.co.uk)
 * @license   http://zucchi.co.uk/legals/bsd-license New BSD License
 */

namespace ZucchiModel\Adapter;

use ZucchiModel\Metadata\MetaDataContainer;
use ZucchiModel\Persistence;
use ZucchiModel\Query\Criteria;

/**
 * Mongo
 *
 * Description of class
 *
 * @author Matt Cockayne <matt@zucchi.co.uk>
 * @package ZucchiModel\Adapter
 * @subpackage
 * @category
 */
class Mongo extends AbstractAdapter
{
    /**
     * Retrieve metadata for given targets.
     *
     * @param array $targets
     * @return mixed
     */
    public function getMetaData(Array $targets)
    {

    }

    /**
     * build and return query object from criteria
     *
     * @param Criteria $criteria
     * @param MetaDataContainer $metadata
     * @return mixed|void
     */
    public function buildQuery(Criteria $criteria, MetaDataContainer $metadata)
    {

    }

    /**
     * execute supplied query and return result
     * @param $query
     * @return mixed
     */
    public function execute($query)
    {

    }

    /**
     * @param Persistence\Container $container
     * @return mixed|void
     */
    public function write(Persistence\Container $container)
    {

    }
}