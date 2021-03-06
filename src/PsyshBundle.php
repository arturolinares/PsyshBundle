<?php

/*
 * This file is part of the PsyshBundle package.
 *
 * (c) Théo FIDRY <theo.fidry@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fidry\PsyshBundle;

use Fidry\PsyshBundle\PsyshFacade;
use Psy\Shell;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * @author Adrian PALMER <navitronic@gmail.com>
 * @author Théo FIDRY    <theo.fidry@gmail.com>
 */
final class PsyshBundle extends Bundle
{
    public function boot()
    {
        parent::boot();

        $this->container->get('psysh.facade');
    }

}
