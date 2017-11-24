<?php
namespace Sitegeist\Goldengate\Dto\Tests\Unit;

use PHPUnit\Framework\TestCase;

use Sitegeist\Goldengate\Dto\Serializer\FilterGroupSerializer;

use Sitegeist\Goldengate\Dto\Structure\FilterGroup;
use Sitegeist\Goldengate\Dto\Structure\FilterGroupOption;
use Sitegeist\Goldengate\Dto\Structure\FilterGroupReference;

class FilterGroupSerializerTest extends TestCase {

    /**
     * @var FilterGroupSerializer
     */
    protected $serializer;

    public function setUp()
    {
        $this->serializer = new FilterGroupSerializer();
    }

    /**
     * @test
     */
    public function serializeAndDeserializationOfProducts()
    {
        $option_1 = new FilterGroupOption();
        $option_1->setId('1');
        $option_1->setName('foo');
        $option_1->setFilterGroupReference(  new FilterGroupReference() );

        $option_2 = new FilterGroupOption();
        $option_2->setId('2');
        $option_2->setName('bar');
        $option_2->setFilterGroupReference(  new FilterGroupReference() );

        $group = new FilterGroup();
        $group->setName('group');
        $group->setId('2123');
        $group->setOptions([$option_1, $option_2]);

        $data =  $this->serializer->serialize($group);

        $restore = $this->serializer->deserialize($data);

        $this->assertEquals($group, $restore);
    }
}