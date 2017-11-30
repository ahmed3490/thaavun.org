<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function catergory(){
        
        return $this->belongsTo('App\Catergory');
        
            }
        

            




            
}
