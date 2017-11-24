<?php
namespace Sitegeist\Goldengate\Dto\Serializer;

use Sitegeist\Goldengate\Dto\Structure\Category;

class CategorySerializer extends AbstractSerializer
{
    /**
     * @param Category $category
     * @return string
     */
    public function serialize(Category $category): string
    {
        return $this->_serialize($category);
    }

    /**
     * @param string $data
     * @return Category
     */
    public function deserialize(string $data): Category
    {
        return $this->_deserialize($data, Category::class);
    }

    /**
     * @param Category[] $categories
     * @return string
     */
    public function serializeArray(array $categories): string
    {
        return $this->_serializeArray($categories);
    }

    /**
     * @param string $data
     * @return Category[]
     */
    public function deserializeArray(string $data): array
    {
        return $this->_deserializeArray($data, Category::class);
    }
}