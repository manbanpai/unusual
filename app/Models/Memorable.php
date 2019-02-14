<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Memorable extends Model
{
    protected $table = 'memorable';
    protected $primaryKey = 'id';
    //protected $fillable = ['id','memorable_id','tag_id'];//允许操作的字段
    public    $timestamps = false;//如果数据表中没有created_at和updated_id字段，则$timestamps则可以不设置，默认为true


    public function memorableTagRelation()
    {
        return $this->hasMany('App\Models\MemorableTagRelation','memorable_id');
    }

    public function tag()
    {
        /*
        * 第一个参数：要关联的表对应的类
        * 第二个参数：中间表的表名
        * 第三个参数：当前表跟中间表对应的外键
        * 第四个参数：要关联的表跟中间表对应的外键
        * */
        return $this->belongsToMany('App\Models\Tag','memorable_tag_relation','memorable_id','tag_id');
    }
}
