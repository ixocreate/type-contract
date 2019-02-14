<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Type;

/**
 * Interface TransformableInterface
 * @package Ixocreate\Contract\Schema
 */
interface TransformableInterface
{
    public function transform($data): TypeInterface;
}
