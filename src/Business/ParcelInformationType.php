<?php

namespace Dpd\Business;

/** Bundles parcel information type data. */
class ParcelInformationType
{
    /**
     * The parcel label number of the corresponding parcel.
     * @var string
     */
    protected string $parcelLabelNumber;

   /**
     * @return string|null
     */
    public function getParcelLabelNumber(): ?string
    {
        return $this->parcelLabelNumber ?? null;
    }
}