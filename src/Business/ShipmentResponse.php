<?php

namespace Dpd\Business;

/** Bundles shipment response data. */
class ShipmentResponse
{
    /**
     * Serves as unique alphanumeric key of the shipment used by customer.
     * @var string
     */
    protected string $identificationNumber;

    /**
     * The shipment number for consignment data. If ordertype is pickup information,
     * the shipment number is an internal database id, which is necessary for technical support requests at DPD.
     * @var string
     */
    protected string $mpsId;

    /**
     * Contains information about the single parcels.
     * @var ParcelInformationType
     */
    protected ParcelInformationType $parcelInformation;

    /**
     * @return string|null
     */
    public function getIdentificationNumber(): ?string
    {
        return $this->identificationNumber ?? null;
    }

    /**
     * @return string|null
     */
    public function getMpsId(): ?string
    {
        return $this->mpsId ?? null;
    }

    /**
     * @return ParcelInformationType|null
     */
    public function getParcelInformation(): ?ParcelInformationType
    {
        return $this->parcelInformation ?? null;
    }
}