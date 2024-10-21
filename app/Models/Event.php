<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use SoftDeletes;

    protected $table = 'events'; 
    protected $primaryKey = 'id_eve';

    protected $fillable = [
        'tit_eve',
        'des_eve',
        'fec_pub_eve',
        'fec_eve',
        'tag_eve',
        'pre_img',
        'res_img'
    ];

    protected $dates = ['deleted_at'];
    
    public function getPreviewImgUrlAttribute()
    {
        $path = public_path($this->preview_img);
        if (file_exists($path)) return asset($this->preview_img);
        
        return asset('assets/images/event/example_preview_event.jpg');
    }

}
