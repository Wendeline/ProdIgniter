<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Categoriesous extends Eloquent
{
    protected $primaryKey = 'idCategS';
    public $timestamps = false;

    public function Produit() {
        return $this->belongsToMany('Produit', 'prodtocategs', 'idCategS', 'idRef');
    }
}
