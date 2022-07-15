<?php

namespace Clickbar\Postgis\IO\Parser;

use Clickbar\Postgis\Geometries\Geometry;
use Clickbar\Postgis\IO\GeometryModelFactory;

abstract class BaseParser
{
    public function __construct(
        protected GeometryModelFactory $factory
    ) {
    }

    abstract public function parse($input): Geometry;
}