<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Tailleproduit extends Eloquent
{
    protected $primaryKey = 'idTailleProd';
    public $timestamps = false;

    public function Produit() {
        return $this->belongsToMany('Produit', 'prodtotailleprixes', 'idTailleProd', 'idRef');
    }
}
