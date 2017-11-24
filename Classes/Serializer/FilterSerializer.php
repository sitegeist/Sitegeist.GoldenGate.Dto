<?php
namespace Sitegeist\Goldengate\Dto\Serializer;

use Sitegeist\Goldengate\Dto\Structure\Filter;

class FilterSerializer extends AbstractSerializer
{
    /**
     * @param Filter $filter
     * @return string
     */
    public function serialize(Filter $filter) : string {
        return $this->_serialize($filter);
    }

    /**
     * @param string $data
     * @return Filter
     */
    public function deserialize(string $data) : Filter {
        return $this->_deserialize($data, Filter::class);
    }

    /**
     * @param Filter[] $filters
     * @return string
     */
    public function serializeArray(array $filters) : string {
        return $this->_serializeArray($filters);
    }

    /**
     * @param string $data
     * @return Filter[]
     */
    public function deserializeArray(string $data) : array {
        return $this->_deserializeArray($data, Filter::class);
    }
}