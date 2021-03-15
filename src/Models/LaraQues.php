<?php
namespace Edgewizz\Lara\Models;

use Illuminate\Database\Eloquent\Model;

class LaraQues extends Model{
    public function answers(){
        return $this->hasMany('Edgewizz\Lara\Models\LaraAns', 'question_id');
    }
    protected $table = 'fmt_lara_ques';
}