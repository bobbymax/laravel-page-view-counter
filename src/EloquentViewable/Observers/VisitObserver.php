<?php

declare(strict_types=1);

/*
 * This file is part of Eloquent Visitable.
 *
 * (c) Cyril de Wit <github@cyrildewit.nl>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CyrildeWit\EloquentViewable\Observers;

use Event;
use CyrildeWit\EloquentViewable\Models\Visit;
use CyrildeWit\EloquentViewable\Events\VisitableWasVisited;

/**
 * Class VisitObserver.
 *
 * @author Cyril de Wit <github@cyrildewit.nl>
 */
class VisitObserver
{
    /**
     * Listen to the Visit created event.
     *
     * @param  \CyrildeWit\EloquentViewable\Models\Visit  $user
     * @return void
     */
    public function created(Visit $visit)
    {
        Event::fire(new VisitableWasVisited($visit));
    }
}
