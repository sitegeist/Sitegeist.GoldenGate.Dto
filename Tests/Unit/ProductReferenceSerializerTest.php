<?php
namespace Sitegeist\Goldengate\Dto\Tests\Unit;

use PHPUnit\Framework\TestCase;

use Sitegeist\Goldengate\Dto\Serializer\ProductReferenceSerializer;

use Sitegeist\Goldengate\Dto\Structure\ProductReference;

class ProductReferenceSerializerTest extends TestCase {

    /**
     * @var ProductReferenceSerializer
     */
    protected $serializer;

    public function setUp()
    {
        $this->serializer = new ProductReferenceSerializer();
    }

    /**
     * @test
     */
    public function serializeAndDeserializationOfItem()
    {
        $productReference = new ProductReference();
        $productReference->setId('123');
        $productReference->setLabel('Lore,');

        $data =  $this->serializer->serialize($productReference);

        $restore = $this->serializer->deserialize($data);

        $this->assertEquals($productReference, $restore);
    }

    /**
     * @test
     */
    public function serializeAndDeserializationOfList()
    {
        $productReference_1 = new ProductReference();
        $productReference_1->setId('123');
        $productReference_1->setLabel('Lorem');

        $productReference_2 = new ProductReference();
        $productReference_2->setId('46dsad');
        $productReference_2->setLabel('ipsum');

        $data =  $this->serializer->serializeArray([$productReference_1, $productReference_2]);
        $restore = $this->serializer->deserializeArray($data);

        $this->assertEquals([$productReference_1, $productReference_2], $restore);
    }
}