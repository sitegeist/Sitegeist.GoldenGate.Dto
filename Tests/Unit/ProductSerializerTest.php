<?php
namespace Sitegeist\Goldengate\Dto\Tests\Unit;

use PHPUnit\Framework\TestCase;

use Sitegeist\Goldengate\Dto\Serializer\ProductSerializer;

use Sitegeist\Goldengate\Dto\Structure\Product;
use Sitegeist\Goldengate\Dto\Structure\ProductDetail;
use Sitegeist\Goldengate\Dto\Structure\ProductDetailPrice;
use Sitegeist\Goldengate\Dto\Structure\ProductDetailImage;
use Sitegeist\Goldengate\Dto\Structure\ProductDetailImageVariant;


class ProductSerializerTest extends TestCase {

    /**
     * @var ProductSerializer
     */
    protected $serializer;

    public function setUp()
    {
        $this->serializer = new ProductSerializer();
    }

    /**
     * @test
     */
    public function serializeAndDeserializationOfProducts()
    {
        $price_1 = new ProductDetailPrice();
        $price_1->setMain(true);
        $price_1->setCurrency('€');
        $price_1->setValue('17,36');
        $price_1->setOriginalValue('20,99');

        $price_2 = new ProductDetailPrice();
        $price_2->setCurrency('€');
        $price_2->setValue('22,35');

        $detail_1 = new ProductDetail();
        $detail_1->setMain(true);
        $detail_1->setNumber('bar');
        $detail_1->setPrices([$price_1, $price_2]);

        $detail_2 = new ProductDetail();
        $detail_2->setNumber('baz');

        $product = new Product();
        $product->setId('fooo');
        $product->setName('fooo Product');
        $product->setDetails([$detail_1, $detail_2]);

        $data =  $this->serializer->serialize($product);
        $restore = $this->serializer->deserialize($data);

        $this->assertEquals($product, $restore);

        var_dump($data);
        var_dump($restore->getMainDetail());
    }

}
