<?php namespace Cool\LaravelModelCache;

use Cool\LaravelModelCache\Traits\Cachable;
use Illuminate\Database\Eloquent\Model;

abstract class CachedModel extends Model
{
    use Cachable;
}
