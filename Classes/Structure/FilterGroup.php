<?php
namespace Sitegeist\Goldengate\Dto\Structure;

class FilterGroup extends Structure
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
     * @var string
     */
    protected $name = '';

    /**
     * @var FilterGroupOption[]
     */
    protected $options = [];

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

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return FilterGroupOptionReference[]
     */
    public function getOptions(): array
    {
        return $this->options;
    }

    /**
     * @param FilterGroupOptionReference[] $options
     */
    public function setOptions(array $options)
    {
        $this->options = $options;
    }
}