<?php

/*
 * This file is part of Laravel Inviteable.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace BrianFaust\Inviteable\Traits;

use BrianFaust\Inviteable\Invite;

trait HasInvites
{
    /**
     * @return mixed
     */
    public function invite()
    {
        return $this->morphOne(Invite::class, 'claimer');
    }
}
