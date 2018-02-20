<?php

namespace Corp;

use Illuminate\Database\Eloquent\Model;
use Corp\Filter;



class Portfolio extends Model
{
    //
    protected $table = 'portfolios';

   public function filter()
   {
       return $this->belongsTo('Corp\Filter', 'filter_alias', 'alias');
   }
}
