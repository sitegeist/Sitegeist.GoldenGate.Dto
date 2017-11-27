<?php
namespace Sitegeist\Goldengate\Dto\Serializer;

use Sitegeist\Goldengate\Dto\Structure\Product;

class ProductSerializer extends AbstractSerializer
{
    /**
     * @var array
     */
    protected $ignoredAttributes = ['mainDetail', 'mainImage', 'mainPrice'];

    /**
     * @param Product $product
     * @return string
     */
    public function serialize(Product $product) : string {
        return $this->_serialize($product);
    }

    /**
     * @param string $data
     * @return Product
     */
    public function deserialize(string $data) : Product {
        return $this->_deserialize($data, Product::class);
    }

    /**
     * @param Product[] $products
     * @return string
     */
    public function serializeArray(array $products) : string {
        return $this->_serializeArray($products);
    }

    /**
     * @param string $data
     * @return Product[]
     */
    public function deserializeArray(string $data) : array {
        return $this->_deserializeArray($data, Product::class);
    }
}
