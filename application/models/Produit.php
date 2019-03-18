<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Produit extends Eloquent
{
    protected   $primaryKey    = 'idRef';
    protected   $keyType       = 'string';
    public      $incrementing  = false;
    public      $timestamps    = false;

    public function Categoriesous() {
    	return $this->belongsToMany('Categoriesous', 'prodtocategs', 'idRef', 'idCategS');
    }

    public function TailleProduit() {
    	return $this->belongsToMany('TailleProduit', 'prodtotailleprixes', 'idRef', 'idTailleProd');
    }

    public function TypeProduits() {
        return $this->belongsTo('TypeProduit', 'typeproduits', 'idTypeProd', 'idTypeProd');
    }
}
