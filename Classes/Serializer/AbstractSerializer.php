<?php
namespace Sitegeist\Goldengate\Dto\Serializer;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

use Sitegeist\Goldengate\Dto\Serializer\ObjectNormalizer;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;

use Sitegeist\Goldengate\Dto\Structure\Structure;

abstract class AbstractSerializer
{
    /**
     * @var Serializer
     */
    private $serializer;

    public function __construct()
    {
        $encoders = [
            new JsonEncoder()
        ];

        $normalizers = [
            new ArrayDenormalizer(),
            new ObjectNormalizer(null, null, null, new PhpDocExtractor())
        ];

        $this->serializer = new Serializer($normalizers, $encoders);
    }

    /**
     * @param Structure $object
     * @return string
     */
    protected function _serialize (Structure $object) : string {
        return $this->serializer->serialize($object, 'json');
    }

    /**
     * @param string $data
     * @param string $className
     * @return object
     */
    protected function _deserialize (string $data, string $className) : Structure {
        return $this->serializer->deserialize($data, $className, 'json');
    }

    /**
     * @param Structure[] $objects
     * @return string
     */
    protected function _serializeArray (array $objects) : string {
        return $this->serializer->serialize($objects, 'json');
    }

    /**
     * @param string $data
     * @param string $className
     * @return array
     */
    protected function _deserializeArray (string $data, string $className) : array {
        return $this->serializer->deserialize($data, $className . '[]', 'json');
    }

}