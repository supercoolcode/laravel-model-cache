<?php namespace Cool\LaravelModelCache;

use Cool\LaravelModelCache\Traits\Buildable;
use Cool\LaravelModelCache\Traits\BuilderCaching;
use Cool\LaravelModelCache\Traits\Caching;

class CachedBuilder extends EloquentBuilder
{
    use Buildable;
    use BuilderCaching;
    use Caching;
}
