<?php
namespace Sitegeist\Goldengate\Dto\Serializer;

use Sitegeist\Goldengate\Dto\Structure\FilterGroup;

class FilterGroupSerializer extends AbstractSerializer
{
    /**
     * @param FilterGroup $product
     * @return string
     */
    public function serialize (FilterGroup $filterGroup) : string {
        return $this->_serialize($filterGroup);
    }

    /**
     * @param string $data
     * @return FilterGroup
     */
    public function deserialize(string $data) : FilterGroup {
        return $this->_deserialize($data, FilterGroup::class);
    }

    /**
     * @param FilterGroup[] $filterGroups
     * @return string
     */
    public function serializeArray(array $filterGroups) : string {
        return $this->_serializeArray()->serialize($filterGroups, 'json');
    }

    /**
     * @param string $data
     * @return FilterGroup[]
     */
    public function deserializeArray(string $data) : array {
        return $this->_deserializeArray()->deserialize($data, FilterGroup::class);
    }
}