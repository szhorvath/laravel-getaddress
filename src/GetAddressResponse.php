<?php

namespace Szhorvath\GetAddress;

class GetAddressResponse
{
    /**
     * Address longitude
     *
     * @var string
     */
    protected $longitude;

    /**
     * Address latitude
     *
     * @var string
     */
    protected $latitude;

    /**
     * Addresses array
     *
     * @var array
     */
    protected $addresses;

    /**
     * Set the longitude
     *
     * @param string $longitude
     * @return void
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set address lattitude
     *
     * @param string $latitude
     * @return void
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * Get address lattitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Get addresses array
     *
     * @return array
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Set an address to the addresses array
     *
     * @param \Szhorvath\GetAddress\Address $address
     * @return array \Szhorvath\GetAddress\Address
     */
    public function addAddress($address)
    {
        $this->addresses[] = $address;
    }
}
