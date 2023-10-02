<?php

namespace Dpd\Business;

use Dpd\Exception\WrongArgumentException;

class PrinterLanguageType
{
    const TYPE_PDF = 'PDF';
    const TYPE_ZPL = 'ZPL';
    const TYPE_DPL = 'DPL';
    const TYPE_PDL = 'PDL';
    const TYPE_BARCODE_IMAGE = 'BARCODE_IMAGE';
    const TYPE_MULTIPAGE_IMAGE = 'MULTIPAGE_IMAGE';

    /**
     * @var string
     */
    protected string $printerFormatType;

    /**
     * @param string $printerFormatType
     * @throws WrongArgumentException
     */
    public function __construct(string $printerFormatType)
    {
        $this->setPrinterFormatType($printerFormatType);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->printerFormatType;
    }

    /**
     * @return string
     */
    public function getPrinterFormatType(): string
    {
        return $this->printerFormatType;
    }

    /**
     * @param string $outputFormatType
     * @return static
     * @throws WrongArgumentException
     */
    public function setPrinterFormatType(string $outputFormatType): static
    {
        if (!in_array($outputFormatType, $allowedTypes = $this->getAllowedPrinterLanguageTypeList())) {
            throw new WrongArgumentException(
                sprintf(
                    'allowed OutputFormatType is %s, entered %s',
                    implode(', ', $allowedTypes),
                    $outputFormatType
                )
            );
        }

        $this->printerFormatType = $outputFormatType;
        return $this;
    }

    /**
     * @return static
     */
    public static function pdf(): static
    {
        return new static(static::TYPE_PDF);
    }

    /**
     * @return static
     */
    public static function zpl(): static
    {
        return new static(static::TYPE_ZPL);
    }

    /**
     * @return static
     */
    public static function dpl(): static
    {
        return new static(static::TYPE_DPL);
    }

    /**
     * @return static
     */
    public static function pdl(): static
    {
        return new static(static::TYPE_PDL);
    }

    /**
     * @return static
     */
    public static function barcodeImage(): static
    {
        return new static(static::TYPE_BARCODE_IMAGE);
    }

    /**
     * @return static
     */
    public static function multipageImage(): static
    {
        return new static(static::TYPE_MULTIPAGE_IMAGE);
    }

    /**
     * @return string[]
     */
    public function getAllowedPrinterLanguageTypeList(): array
    {
        return [
            self::TYPE_PDF,
            self::TYPE_ZPL,
            self::TYPE_DPL,
            self::TYPE_PDL,
            self::TYPE_BARCODE_IMAGE,
            self::TYPE_MULTIPAGE_IMAGE
        ];
    }
}