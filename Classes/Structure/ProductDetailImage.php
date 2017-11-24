<?php
namespace Sitegeist\Goldengate\Dto\Structure;

class ProductDetailImage extends Structure
{

    /**
     * @var boolean
     */
    protected $main = false;

    /**
     * @var string
     */
    protected $title = '';

    /**
     * @var ProductDetailImageSize[]
     */
    protected $imageSizes = [];

    /**
     * @return bool
     */
    public function isMain(): bool
    {
        return $this->main;
    }

    /**
     * @param bool $main
     */
    public function setMain(bool $main)
    {
        $this->main = $main;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return ProductDetailImageSize[]
     */
    public function getImageSizes(): array
    {
        return $this->imageSizes;
    }

    /**
     * @param ProductDetailImageSize[] $imageSizes
     */
    public function setImageSizes(array $imageSizes)
    {
        $this->imageSizes = $imageSizes;
    }
}
