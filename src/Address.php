<?php

namespace Szhorvath\GetAddress;

/**
 * An individual address returned from the getaddress.io API
 */
class Address
{
    protected $line1;
    protected $line2;
    protected $line3;
    protected $line4;
    protected $town;
    protected $postalTown;
    protected $county;


    /**
     * Instantiates a new Address object
     *
     * @param string $line1      Line 1
     * @param string $line2      Line 2
     * @param string $line3      Line 3
     * @param string $line4      Line 4
     * @param string $town       Town
     * @param string $postalTown Postal Town
     * @param string $county     County
     */
    public function __construct(
        $line1,
        $line2 = '',
        $line3 = '',
        $line4 = '',
        $town = '',
        $postalTown = '',
        $county = ''
    ) {
        $this->line1 = empty($line1)? null: $line1;
        $this->line2 = empty($line2)? null: $line2;
        $this->line3 = empty($line3)? null: $line3;
        $this->line4 = empty($line4)? null: $line4;
        $this->town = empty($town)? null: $town;
        $this->postalTown = empty($postalTown)? null: $postalTown;
        $this->county = empty($county)? null: $county;
    }


    /**
     * Returns line 1
     *
     * @return string
     */
    public function getLine1()
    {
        return $this->line1;
    }


    /**
     * Returns line 2
     *
     * @return string
     */
    public function getLine2()
    {
        return $this->line2;
    }


    /**
     * Returns line 3
     *
     * @return string
     */
    public function getLine3()
    {
        return $this->line3;
    }


    /**
     * Returns line 4
     *
     * @return string
     */
    public function getLine4()
    {
        return $this->line4;
    }


    /**
     * Returns town
     *
     * @return string
     */
    public function getTown()
    {
        return $this->town;
    }


    /**
     * Returns postal town
     *
     * @return string
     */
    public function getPostalTown()
    {
        return $this->postalTown;
    }


    /**
     * Returns the most appropriate of the two town fields
     *
     * @return string [description]
     */
    public function getNormalisedTown()
    {
        if ($this->town != '') {
            return $this->town;
        }

        return $this->postalTown;
    }


    /**
     * Returns county
     *
     * @return string
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * Returns the address as comma separated string
     *
     * @return string
     */
    public function toCsv()
    {
        return sprintf('%s,%s,%s,%s,%s,%s,%s', $this->getLine1(), $this->getLine2(), $this->getLine3(), $this->getLine4(), $this->getTown(), $this->getPostalTown(), $this->getCounty());
    }
}
