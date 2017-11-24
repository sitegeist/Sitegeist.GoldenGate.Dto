<?php
namespace Sitegeist\Goldengate\Dto\Serializer;

use Sitegeist\Goldengate\Dto\Structure\CategoryReference;

class CategoryReferenceSerializer extends AbstractSerializer
{
    /**
     * @param CategoryReference $categoryReference
     * @return string
     */
    public function serialize(CategoryReference $categoryReference): string
    {
        return $this->_serialize($categoryReference);
    }

    /**
     * @param string $data
     * @return CategoryReference
     */
    public function deserialize(string $data): CategoryReference
    {
        return $this->_deserialize($data, CategoryReference::class);
    }

    /**
     * @param CategoryReference[] $categoryReferences
     * @return string
     */
    public function serializeArray(array $categoryReferences): string
    {
        return $this->_serializeArray($categoryReferences);
    }

    /**
     * @param string $data
     * @return CategoryReference[]
     */
    public function deserializeArray(string $data): array
    {
        return $this->_deserializeArray($data, CategoryReference::class);
    }
}