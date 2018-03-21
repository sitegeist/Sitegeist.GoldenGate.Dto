<?php
namespace Sitegeist\Goldengate\Dto\Structure;

class Filter extends Structure
{
    /**
     * @var string
     */
    protected $minPrice = '';

    /**
     * @var string
     */
    protected $maxPrice = '';

    /**
     * @var FilterGroupOptionReference[]
     */
    protected $filterGroupOptionReferences = [];

    /**
     * @var CategoryReference[]
     */
    protected $categoryReferences = [];

    /**
     * @return string
     */
    public function getMinPrice(): string
    {
        return $this->minPrice;
    }

    /**
     * @param string $minPrice
     */
    public function setMinPrice(string $minPrice)
    {
        $this->minPrice = $minPrice;
    }

    /**
     * @return string
     */
    public function getMaxPrice(): string
    {
        return $this->maxPrice;
    }

    /**
     * @param string $maxPrice
     */
    public function setMaxPrice(string $maxPrice)
    {
        $this->maxPrice = $maxPrice;
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

    /**
     * @return CategoryReference[]
     */
    public function getCategoryReferences(): array
    {
        return $this->categoryReferences;
    }

    /**
     * @param CategoryReference[] $categoryReferences
     */
    public function setCategoryReferences(array $categoryReferences)
    {
        $this->categoryReferences = $categoryReferences;
    }

}