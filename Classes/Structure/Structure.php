<?php
namespace Sitegeist\Goldengate\Dto\Structure;

abstract class Structure
{
    /**
     * @var string
     */
    protected $id = '';

    /**
     * @var string
     */
    protected $label = '';

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel(string $label)
    {
        $this->label = $label;
    }
}