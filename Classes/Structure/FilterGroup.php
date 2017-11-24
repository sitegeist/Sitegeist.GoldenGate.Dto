<?php
namespace Sitegeist\Goldengate\Dto\Structure;

class FilterGroup extends Structure
{

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
