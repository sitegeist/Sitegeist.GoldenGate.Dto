<?php
namespace Sitegeist\Goldengate\Dto\Tests\Unit;

use PHPUnit\Framework\TestCase;

use Sitegeist\Goldengate\Dto\Serializer\FilterSerializer;

use Sitegeist\Goldengate\Dto\Structure\Filter;
use Sitegeist\Goldengate\Dto\Structure\FilterGroupOptionReference;

class FilterSerializerTest extends TestCase {

    /**
     * @var FilterSerializer
     */
    protected $serializer;

    public function setUp()
    {
        $this->serializer = new FilterSerializer();
    }

    /**
     * @test
     */
    public function serializeAndDeserializationOfProducts()
    {
        $option_1 = new FilterGroupOptionReference();
        $option_1->setId('1');
        $option_1->setLabel('foo');

        $option_2 = new FilterGroupOptionReference();
        $option_2->setId('2');
        $option_2->setLabel('bar');

        $filter = new Filter();
        $filter->setMaxPrice('158,00');
        $filter->setMinPrice('2123');
        $filter->setFilterGroupOptionReferences([$option_1, $option_2]);

        $data =  $this->serializer->serialize($filter);

        $restore = $this->serializer->deserialize($data);

        $this->assertEquals($filter, $restore);
    }
}