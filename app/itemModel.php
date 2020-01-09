<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class itemModel extends Model
{
    protected $table = 'items';
    protected $fillable = ['nama_item', 'kategori_id', 'images', 'description'];
}
