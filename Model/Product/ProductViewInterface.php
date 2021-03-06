<?php

declare(strict_types=1);

/*
 * This file is part of Sulu.
 *
 * (c) MASSIVE ART WebServices GmbH
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Sulu\Bundle\SyliusConsumerBundle\Model\Product;

use Sulu\Bundle\SyliusConsumerBundle\Model\Content\ContentViewInterface;
use Sulu\Bundle\SyliusConsumerBundle\Model\RoutableResource\RoutableResourceInterface;

interface ProductViewInterface
{
    public function getLocale(): string;

    public function getProduct(): ProductInterface;

    public function getProductInformation(): ProductInformationInterface;

    public function getContent(): ContentViewInterface;

    public function getRoutableResource(): RoutableResourceInterface;
}
