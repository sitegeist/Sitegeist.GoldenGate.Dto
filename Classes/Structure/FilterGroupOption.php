<?php
namespace Sitegeist\Goldengate\Dto\Structure;

class FilterGroupOption extends Structure
{

    /**
     * @var string
     */
    protected $name = '';

    /**
     * @var FilterGroupReference
     */
    protected $filterGroupReference;

    /**
     * @return string
     */
    public function getName(): string
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
     * @return FilterGroupReference
     */
    public function getFilterGroupReference(): FilterGroupReference
    {
        return $this->filterGroupReference;
    }

    /**
     * @param FilterGroupReference $filterGroupReference
     */
    public function setFilterGroupReference(FilterGroupReference $filterGroupReference = null)
    {
        $this->filterGroupReference = $filterGroupReference;
    }
}
