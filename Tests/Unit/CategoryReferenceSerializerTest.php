<?php
namespace Sitegeist\Goldengate\Dto\Tests\Unit;

use PHPUnit\Framework\TestCase;

use Sitegeist\Goldengate\Dto\Serializer\CategoryReferenceSerializer;
use Sitegeist\Goldengate\Dto\Structure\CategoryReference;

class CategoryReferenceSerializerTest extends TestCase {

    /**
     * @var Ca
     */
    protected $serializer;

    public function setUp()
    {
        $this->serializer = new CategoryReferenceSerializer();
    }

    /**
     * @test
     */
    public function serializeAndDeserializationOfItem()
    {
        $categoryReference = new CategoryReference();
        $categoryReference->setId('123');
        $categoryReference->setLabel('Lore,');

        $data =  $this->serializer->serialize($categoryReference);

        $restore = $this->serializer->deserialize($data);

        $this->assertEquals($categoryReference, $restore);
    }

    /**
     * @test
     */
    public function serializeAndDeserializationOfList()
    {
        $categoryReference_1 = new CategoryReference();
        $categoryReference_1->setId('123');
        $categoryReference_1->setLabel('Lorem');

        $categoryReference_2 = new CategoryReference();
        $categoryReference_2->setId('46dsad');
        $categoryReference_2->setLabel('ipsum');

        $data =  $this->serializer->serializeArray([$categoryReference_1, $categoryReference_2]);
        $restore = $this->serializer->deserializeArray($data);

        $this->assertEquals([$categoryReference_1, $categoryReference_2], $restore);
    }
}