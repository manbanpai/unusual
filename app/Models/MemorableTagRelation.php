<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MemorableTagRelation extends Model
{
    protected $table = 'memorable_tag_relation';

    protected $primaryKey = 'id';
    protected $fillable = ['id','memorable_id','tag_id'];//允许操作的字段
    public    $timestamps = false;//如果数据表中没有created_at和updated_id字段，则$timestamps则可以不设置，默认为true
}
