<?php
namespace Sitegeist\Goldengate\Dto\Tests\Unit;

use PHPUnit\Framework\TestCase;

use Sitegeist\Goldengate\Dto\Serializer\CategorySerializer;
use Sitegeist\Goldengate\Dto\Structure\Category;
use Sitegeist\Goldengate\Dto\Structure\CategoryReference;

class CategorySerializerTest extends TestCase {

    /**
     * @var Ca
     */
    protected $serializer;

    public function setUp()
    {
        $this->serializer = new CategorySerializer();
    }

    /**
     * @test
     */
    public function serializeAndDeserializationOfItem()
    {
        $item = new Category();
        $item->setId('123');
        $item->setUri('http://www.foobar.de/cat/123');

        $parentRef = new CategoryReference();
        $parentRef->setId('131');
        $parentRef->setLabel('fgoooo');

        $childReference_1 = new CategoryReference();
        $childReference_1->setId('131');
        $childReference_1->setLabel('fgoooo');

        $childReference_2 = new CategoryReference();
        $childReference_2->setId('131');
        $childReference_2->setLabel('fgoooo');

        $item->setParentCategoryReference($parentRef);
        $item->setChildCategoryReferences([$childReference_1, $childReference_2]);

        $data =  $this->serializer->serialize($item);

        $restore = $this->serializer->deserialize($data);

        $this->assertEquals($item, $restore);
    }

    /**
     * @test
     */
    public function serializeAndDeserializationOfList()
    {
        $item_1 = new Category();
        $item_1->setId('123');
        $item_1->setLabel('Lorem');

        $parentRef = new CategoryReference();
        $parentRef->setId('131');
        $parentRef->setLabel('fgoooo');

        $childReference_1 = new CategoryReference();
        $childReference_1->setId('131');
        $childReference_1->setLabel('fgoooo');

        $childReference_2 = new CategoryReference();
        $childReference_2->setId('131');
        $childReference_2->setLabel('fgoooo');

        $item_2 = new Category();
        $item_2->setId('46dsad');
        $item_2->setLabel('ipsum');
        $item_2->setParentCategoryReference($parentRef);
        $item_2->setChildCategoryReferences([$childReference_1, $childReference_2]);

        $data =  $this->serializer->serializeArray([$item_1, $item_2]);

        $restore = $this->serializer->deserializeArray($data);

        $this->assertEquals([$item_1, $item_2], $restore);
    }
}