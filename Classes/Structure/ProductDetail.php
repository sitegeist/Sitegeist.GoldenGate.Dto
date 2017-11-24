<?php
namespace Sitegeist\Goldengate\Dto\Structure;

class ProductDetail extends Structure
{
    /**
     * @var boolean
     */
    protected $main = false;

    /**
     * @var string
     */
    protected $number = '';

    /**
     * @var string
     */
    protected $description = '';

    /**
     * @var string
     */
    protected $unit = '';

    /**
     * @var ProductDetailImage[]
     */
    protected $images = [];

    /**
     * @var ProductDetailPrice[]
     */
    protected $prices = [];

    /**
     * @return bool
     */
    public function isMain(): bool
    {
        return $this->main;
    }

    /**
     * @param bool $main
     */
    public function setMain(bool $main)
    {
        $this->main = $main;
    }


    /**
     * @return string
     */
    public function getNumber() : string
    {
        return $this->number;
    }

    /**
     * @param string $number
     */
    public function setNumber(string $number)
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getUnit(): string
    {
        return $this->unit;
    }

    /**
     * @param string $unit
     */
    public function setUnit(string $unit)
    {
        $this->unit = $unit;
    }

    /**
     * @return ProductDetailImage[]
     */
    public function getImages(): array
    {
        return $this->images;
    }

    /**
     * @param ProductDetailImage[] $images
     */
    public function setImages(array $images)
    {
        $this->images = $images;
    }

    /**
     * @return ProductDetailPrice[]
     */
    public function getPrices(): array
    {
        return $this->prices;
    }

    /**
     * @param ProductDetailPrice[] $prices
     */
    public function setPrices(array $prices)
    {
        $this->prices = $prices;
    }
}
