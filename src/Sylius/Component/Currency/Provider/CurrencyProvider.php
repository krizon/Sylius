<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Component\Currency\Provider;

use Sylius\Component\Resource\Repository\RepositoryInterface;

/**
 * Default provider returns all enabled currencies.
 *
 * @author Paweł Jędrzejewski <pawel@sylius.org>
 */
class CurrencyProvider implements CurrencyProviderInterface
{
    /**
     * Repository for currency model.
     *
     * @var RepositoryInterface
     */
    protected $currencyRepository;

    /**
     * @param RepositoryInterface $currencyRepository
     */
    public function __construct(RepositoryInterface $currencyRepository)
    {
        $this->currencyRepository = $currencyRepository;
    }

    /**
     * {@inheritdoc}
     */
    public function getAvailableCurrencies()
    {
        return $this->currencyRepository->findBy(array('enabled' => true));
    }
}
