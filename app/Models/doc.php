<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doc extends Model
{
    use HasFactory;

    protected $table="docs";
    protected $fillable=[
        'introd',
        'link_introd',
        'link',
        'link_subject',
        'copy_right',
        'copy_right_link',
        'image_cover',
        'image',
        'image_alt',
        'doc_name',
        'doc_title',
        'doc_color',
        'pre',
        'doc_subject',
    ];
}
