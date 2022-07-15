<?php

namespace Clickbar\Postgis\Geometries;

use Clickbar\Postgis\IO\Dimension;

class Point extends Geometry
{
    // TODO: Consider using X, Y and Z instead of the WGS84 wording to be more general
    public function __construct(
        Dimension        $dimension,
        protected float  $latitude,
        protected float  $longitude,
        protected ?float $altitude = null,
        ?int             $srid = null
    ) {
        parent::__construct($dimension, $srid);
    }

    public function is3d(): bool
    {
        return $this->altitude !== null;
    }

    /**
     * @return float
     */
    public function getLatitude(): float
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     */
    public function setLatitude(float $latitude): void
    {
        $this->latitude = $latitude;
    }

    /**
     * @return float
     */
    public function getLongitude(): float
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     */
    public function setLongitude(float $longitude): void
    {
        $this->longitude = $longitude;
    }

    /**
     * @return float|null
     */
    public function getAltitude(): ?float
    {
        return $this->altitude;
    }

    /**
     * @param float $altitude
     */
    public function setAltitude(float $altitude): void
    {
        $this->altitude = $altitude;
    }
}