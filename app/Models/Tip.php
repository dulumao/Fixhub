<?php

/*
 * This file is part of Fixhub.
 *
 * Copyright (C) 2016 Fixhub.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fixhub\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Tip model.
 */
class Tip extends Model
{
    /**
     * The fillable properties.
     *
     * @var string[]
     */
    protected $fillable = ['body', 'status'];
}
