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

namespace Runroom\SeoBundle\Factory;

use Runroom\SeoBundle\Entity\MetaInformationTranslation;
use Zenstruck\Foundry\Persistence\PersistentObjectFactory;

/**
 * @extends PersistentObjectFactory<MetaInformationTranslation>
 */
final class MetaInformationTranslationFactory extends PersistentObjectFactory
{
    public static function class(): string
    {
        return MetaInformationTranslation::class;
    }

    /**
     * @return array<string, mixed>
     */
    protected function defaults(): array
    {
        return [
            'title' => self::faker()->words(3, true),
            'description' => self::faker()->paragraph(),
            'locale' => self::faker()->unique(true)->languageCode(),
        ];
    }
}
