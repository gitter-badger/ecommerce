<?php
/*
 * This file is part of the Sonata package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\Component\Payment\Scellius;

use Sonata\Component\Order\OrderInterface;

interface ScelliusTransactionGeneratorInterface
{
    /**
     * @param  \Sonata\Component\Order\OrderInterface $order
     * @return void
     */
    public function generate(OrderInterface $order);
}
