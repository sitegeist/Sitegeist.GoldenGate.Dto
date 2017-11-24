<?php
namespace Sitegeist\Goldengate\Dto\Serializer;

use Sitegeist\Goldengate\Dto\Structure\ProductReference;

class ProductReferenceSerializer extends AbstractSerializer
{
    /**
     * @param ProductReference $productReference
     * @return string
     */
    public function serialize(ProductReference $productReference) : string {
        return $this->_serialize($productReference);
    }

    /**
     * @param string $data
     * @return ProductReference
     */
    public function deserialize(string $data) : ProductReference {
        return $this->_deserialize($data, ProductReference::class);
    }

    /**
     * @param ProductReference[] $productReferences
     * @return string
     */
    public function serializeArray(array $productReferences) : string {
        return $this->_serializeArray($productReferences);
    }

    /**
     * @param string $data
     * @return ProductReference[]
     */
    public function deserializeArray(string $data) : array {
        return $this->_deserializeArray($data, ProductReference::class);
    }
}