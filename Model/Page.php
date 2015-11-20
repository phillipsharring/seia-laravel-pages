<?php

namespace Seia\Pages\Model;

use Seia\Core\Content;

class Page extends Content
{
    protected $table = 'contents';

    protected $fillable = [
        'refers_to',
        'parent_id',
        'category_id',
        'created_by',
        'language_id',
        'mime_type',
        'title',
        'summary',
        'body',
        'media',
        'status',
    ];
}
