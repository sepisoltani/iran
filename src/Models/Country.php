<?php

namespace Sepisoltani\Iran\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperCountry
 */
class Country extends Model
{
    use HasFactory;

    public $timestamps = false;
}
