<?php
namespace Sitegeist\Goldengate\Dto\Structure;

class ProductDetailPrice extends Structure
{
    /**
     * @var boolean
     */
    protected $main = false;

    /**
     * @var integer
     */
    protected $from = 0;

    /**
     * @var integer
     */
    protected $to = 0;

    /**
     * @var string
     */
    protected $value = '';

    /**
     * @var string
     */
    protected $originalValue = '';

    /**
     * @var string
     */
    protected $currency;

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
     * @return int
     */
    public function getFrom(): int
    {
        return $this->from;
    }

    /**
     * @param int $from
     */
    public function setFrom(int $from)
    {
        $this->from = $from;
    }

    /**
     * @return int
     */
    public function getTo(): int
    {
        return $this->to;
    }

    /**
     * @param int $to
     */
    public function setTo(int $to)
    {
        $this->to = $to;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue(string $value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getOriginalValue(): string
    {
        return $this->originalValue;
    }

    /**
     * @param string $originalValue
     */
    public function setOriginalValue(string $originalValue)
    {
        $this->originalValue = $originalValue;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency)
    {
        $this->currency = $currency;
    }
}