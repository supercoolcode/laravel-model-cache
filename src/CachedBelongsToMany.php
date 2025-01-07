<?php namespace Cool\LaravelModelCache;

use GeneaLabs\LaravelPivotEvents\Traits\FiresPivotEventsTrait;
use Cool\LaravelModelCache\Traits\Buildable;
use Cool\LaravelModelCache\Traits\BuilderCaching;
use Cool\LaravelModelCache\Traits\Caching;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class CachedBelongsToMany extends BelongsToMany
{
    use Buildable;
    use BuilderCaching;
    use Caching;
    use FiresPivotEventsTrait;
}
