<?php namespace Troward\SugarAPI\Contracts;

/**
 * Interface BaseModuleContract
 * @package Troward\SugarAPI\Contracts
 */
interface BaseModuleContract {
    /**
     * @param int $limit
     * @param array $fields
     * @param array $orderBy
     * @return mixed
     */
    public function all($limit = 500, $fields = [], $orderBy = []);

    /**
     * @param $key
     * @param $value
     * @param array $fields
     * @return mixed
     */
    public function find($key, $value, $fields = []);
}