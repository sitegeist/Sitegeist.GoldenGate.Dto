<?php
namespace Sitegeist\Goldengate\Dto\Structure;

class Product extends Structure
{

    /**
     * @var string
     */
    protected $name = '';

    /**
     * @var string
     */
    protected $description = '';

    /**
     * @var ProductDetail[]
     */
    protected $details;

    /**
     * @var ProductReference[]
     */
    protected $similarProductReferences = [];

    /**
     * @var ProductReference[]
     */
    protected $crossSellingProductReferences = [];

    /**
     * @var FilterGroupOptionReference[]
     */
    protected $filterGroupOptionReferences = [];

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription() : string
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
     * @return ProductDetail|null
     */
    public function getMainDetail()
    {
        foreach ($this->details as $detail) {
            /**
             * @var ProductDetail $detail
             */
            if ($detail->isMain()) {
                return $detail;
            }
        }
        return null;
    }

    /**
     * @return ProductDetail[]
     */
    public function getDetails() : array
    {
        return $this->details;
    }

    /**
     * @param ProductDetail[] $details
     */
    public function setDetails(array $details)
    {
        $this->details = $details;
    }

    /**
     * @return ProductReference[]
     */
    public function getSimilarProductReferences(): array
    {
        return $this->similarProductReferences;
    }

    /**
     * @param ProductReference[] $similarProductReferences
     */
    public function setSimilarProductReferences(array $similarProductReferences)
    {
        $this->similarProductReferences = $similarProductReferences;
    }

    /**
     * @return ProductReference[]
     */
    public function getCrossSellingProductReferences(): array
    {
        return $this->crossSellingProductReferences;
    }

    /**
     * @param ProductReference[] $crossSellingProductReferences
     */
    public function setCrossSellingProductReferences(array $crossSellingProductReferences)
    {
        $this->crossSellingProductReferences = $crossSellingProductReferences;
    }

    /**
     * @return FilterGroupOptionReference[]
     */
    public function getFilterGroupOptionReferences(): array
    {
        return $this->filterGroupOptionReferences;
    }

    /**
     * @param FilterGroupOptionReference[] $filterGroupOptionReferences
     */
    public function setFilterGroupOptionReferences(array $filterGroupOptionReferences)
    {
        $this->filterGroupOptionReferences = $filterGroupOptionReferences;
    }

}
