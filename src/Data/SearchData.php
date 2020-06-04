<?php

namespace App\Data;


class SearchData
{
    /**
     * @var string
     */
    public $q = '';

    /**
     * @var Category[]
     */
    public $categories = [];

    /**
     * @var type[]
     */
    public $type = [];

    /**
     * @var null|integer
     */
    public $min;

    /**
     * @var null|integer
     */
    public $max;


    /**
     * @var integer
     */

    public $user;
}