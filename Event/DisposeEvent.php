<?php


namespace SpecShaper\GdprBundle\Event;

use SpecShaper\GdprBundle\Model\PersonalData;

/**
 * Class DisposeEvent
 *
 * An event thrown when an parameter is to be disposed of.
 *
 * Can be used to interecpt parameter disposal and implement a custom method.
 *
 * @package SpecShaper\GdprBundle\Event
 */
class DisposeEvent
{
    /**
     * The string / object to be encrypted or decrypted
     *
     * @since Available since Release 1.0.0
     *
     * @var string
     */
    protected $parameter;

    /**
     * @var string
     */
    protected $method;

    /**
     * DisposeEvent constructor.
     *
     * @param        $parameter The parameter to be disposed of.
     * @param string $method The disposal method
     */
    public function __construct($parameter, $method = PersonalData::DISPOSE_BY_SET_NULL)
    {
        $this->parameter= $parameter;
        $this->method = $method;
    }

    /**
     * @return string
     */
    public function getParameter(): string
    {
        return $this->parameter;
    }

    /**
     * Set Parameter.
     *
     * @param string $parameter
     *
     * @return DisposeEvent
     */
    public function setParameter(string $parameter): DisposeEvent
    {
        $this->parameter = $parameter;

        return $this;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * Set Method.
     *
     * @param string $method
     *
     * @return DisposeEvent
     */
    public function setMethod(string $method): DisposeEvent
    {
        $this->method = $method;

        return $this;
    }



}
