<?php

/*
 * This file is part of HSPHP.
 *
 * (c) Nuzhdin Urii
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HSPHP;

/**
 * Filter class
 *
 * @package HSPHP
 * @author  K_Yamada
 */
class Filter
{
	//Types
    const FILTER_TYPE_SKIP = 'F';
    const FILTER_TYPE_STOP = 'W';
	
    private $position = 0;
    private $compare = "=";
    private $value = null;
    private $type = self::FILTER_TYPE_SKIP;
	
    /**
     * @param int $position
     * @param string $compare
     * @param string $value
     * @param string $type
     *
     * @throws InvalidArgumentException
     */
    public function __construct($position, $compare, $value, $type = self::FILTER_TYPE_SKIP)
    {
        $this->position = (int)$position;
		$this->compare = strval($compare);
        $this->key = $value;
		$this->type = $type;
    }
	
	
    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }
	
    /**
     * @return string
     */
    public function getCompare()
    {
        return $this->comparison->getComparison();
    }
	
    /**
     * @return array
     */
    public function getValue()
    {
        return $this->value;
    }
	
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
	}	
}
