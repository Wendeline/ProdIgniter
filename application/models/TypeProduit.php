<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class TypeProduit extends Eloquent
{
    protected $primaryKey = 'idTypeProd';
    public $timestamps = false;

    public function TypeProduits() {
        return $this->hasMany('Produit', 'idTypeProd', 'idTypeProd');
    }
}
