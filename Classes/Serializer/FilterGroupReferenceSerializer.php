<?php
namespace Sitegeist\Goldengate\Dto\Serializer;

use Sitegeist\Goldengate\Dto\Structure\FilterGroupReference;

class FilterGroupReferenceSerializer extends AbstractSerializer
{
    /**
     * @param FilterGroupReference $filterGroupReference
     * @return string
     */
    public function serialize(FilterGroupReference $filterGroupReference): string
    {
        return $this->_serialize($filterGroupReference);
    }

    /**
     * @param string $data
     * @return FilterGroupReference
     */
    public function deserialize(string $data): FilterGroupReference
    {
        return $this->_deserialize($data, FilterGroupReference::class);
    }

    /**
     * @param FilterGroupReference[] $filterGroupReferences
     * @return string
     */
    public function serializeArray(array $filterGroupReferences): string
    {
        return $this->_serializeArray($filterGroupReferences);
    }

    /**
     * @param string $data
     * @return FilterGroupReference[]
     */
    public function deserializeArray(string $data): array
    {
        return $this->_deserializeArray($data, FilterGroupReference::class);
    }
}