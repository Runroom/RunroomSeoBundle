<?php

declare(strict_types=1);

/*
 * This file is part of the Runroom package.
 *
 * (c) Runroom <runroom@runroom.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Runroom\SeoBundle\MetaInformation;

use Runroom\SeoBundle\Model\SeoModelInterface;
use Runroom\SeoBundle\ViewModel\MetaInformationViewModel;
use Symfony\Component\HttpFoundation\RequestStack;

final class MetaInformationService implements MetaInformationServiceInterface
{
    private RequestStack $requestStack;

    /** @var iterable<MetaInformationProviderInterface<SeoModelInterface>> */
    private iterable $providers;

    private MetaInformationBuilder $builder;

    /** @param iterable<MetaInformationProviderInterface<SeoModelInterface>> $providers */
    public function __construct(
        RequestStack $requestStack,
        iterable $providers,
        MetaInformationBuilder $builder
    ) {
        $this->requestStack = $requestStack;
        $this->providers = $providers;
        $this->builder = $builder;
    }

    public function build(SeoModelInterface $model): MetaInformationViewModel
    {
        $route = $this->getCurrentRoute();

        return $this->builder->build(
            $this->selectProvider($route),
            $model,
            $route
        );
    }

    private function getCurrentRoute(): string
    {
        $request = $this->requestStack->getCurrentRequest();

        return null !== $request ? $request->get('_route', '') : '';
    }

    /** @phpstan-return MetaInformationProviderInterface<SeoModelInterface> */
    private function selectProvider(string $route): MetaInformationProviderInterface
    {
        foreach ($this->providers as $provider) {
            if ($provider->providesMetas($route)) {
                return $provider;
            }
        }

        throw new \RuntimeException('There is no provided selected to build meta information');
    }
}
