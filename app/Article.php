<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  /**
   * The rates that belong to the tour.
   */
  public function rates()
  {
      return $this->belongsToMany('App\Model\Rate');
  }

  /**
   * The category to which tours belong
   */
  public function category()
  {
      return $this->belongsTo('App\Category');
  }
}
