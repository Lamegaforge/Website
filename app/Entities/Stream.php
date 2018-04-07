<?php

namespace App\Entities;

class Stream extends AbstractEntity
{
    protected $attributes = [
        'name' => null,
        'status' => null,
        'game' => null,
        'template' => null,
    ];
}
