<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Param extends Eloquent
{
    protected $primaryKey = 'id_param';
    public $timestamps = false;
}
