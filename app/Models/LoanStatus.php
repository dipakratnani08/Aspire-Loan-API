<?php

/**
 * Laravel Model Class
 * PHP version 8.1
 *
 * @category App\Models
 * @package  Aspire mini app
 * @author   Dipak Ratnani<dipakratnani08@gmail.com>
 */

namespace App\Models;

/**
 * Class LoanStatus
 *
 * @category App\Models
 * @package  Aspire mini app
 * @author   Dipak Ratnani<dipakratnani08@gmail.com>
 */

class LoanStatus extends BaseModel
{
    /**
     * Allow mass assignment for all except these
     * @var    array
     */
    protected $guarded = ['id'];
}
