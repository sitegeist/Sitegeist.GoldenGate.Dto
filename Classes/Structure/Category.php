<?php
namespace Sitegeist\Goldengate\Dto\Structure;

class Category extends Structure
{
    /**
     * @var string
     */
    protected $uri = '';

    /**
     * @var CategoryReference
     */
    protected $parentCategoryReference;

    /**
     * @var CategoryReference[]
     */
    protected $childCategoryReferences = [];

    /**
     * @return string
     */
    public function getUri(): string
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     */
    public function setUri(string $uri)
    {
        $this->uri = $uri;
    }

    /**
     * @return CategoryReference
     */
    public function getParentCategoryReference()
    {
        return $this->parentCategoryReference;
    }

    /**
     * @param CategoryReference|null $parentCategoryReference
     */
    public function setParentCategoryReference(CategoryReference $parentCategoryReference)
    {
        $this->parentCategoryReference = $parentCategoryReference;
    }

    /**
     * @return CategoryReference[]
     */
    public function getChildCategoryReferences(): array
    {
        return $this->childCategoryReferences;
    }

    /**
     * @param CategoryReference[] $childCategoryReferences
     */
    public function setChildCategoryReferences(array $childCategoryReferences)
    {
        $this->childCategoryReferences = $childCategoryReferences;
    }


}