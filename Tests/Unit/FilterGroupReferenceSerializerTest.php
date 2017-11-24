<?php
namespace Sitegeist\Goldengate\Dto\Tests\Unit;

use PHPUnit\Framework\TestCase;

use Sitegeist\Goldengate\Dto\Serializer\FilterGroupReferenceSerializer;
use Sitegeist\Goldengate\Dto\Structure\FilterGroupReference;

class FilerGroupReferenceSerializerTest extends TestCase {

    /**
     * @var Ca
     */
    protected $serializer;

    public function setUp()
    {
        $this->serializer = new FilterGroupReferenceSerializer();
    }

    /**
     * @test
     */
    public function serializeAndDeserializationOfItem()
    {
        $productReference = new FilterGroupReference();
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
        $productReference_1 = new FilterGroupReference();
        $productReference_1->setId('123');
        $productReference_1->setLabel('Lorem');

        $productReference_2 = new FilterGroupReference();
        $productReference_2->setId('46dsad');
        $productReference_2->setLabel('ipsum');

        $data =  $this->serializer->serializeArray([$productReference_1, $productReference_2]);
        $restore = $this->serializer->deserializeArray($data);

        $this->assertEquals([$productReference_1, $productReference_2], $restore);
    }
}