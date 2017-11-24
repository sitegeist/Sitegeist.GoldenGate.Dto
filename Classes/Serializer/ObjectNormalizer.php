<?php
namespace Sitegeist\Goldengate\Dto\Serializer;

use Symfony\Component\Serializer\Normalizer\ObjectNormalizer as BaseObjectNormalizer;

class ObjectNormalizer extends BaseObjectNormalizer
{
    /**
     * {@inheritdoc}
     *
     * @throws CircularReferenceException
     */
    public function normalize($object, $format = null, array $context = array()) {
        $data = parent::normalize($object, $format, $context);

        // remove the noll values from the normalisation
        return array_filter($data, function ($value) {
            return null !== $value;
        });
    }
}