<?php
namespace Ranj\UmengOpenAPI\com\alibaba\china\openapi\client\example\param\apiexample;

use Ranj\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Ranj\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;

class ExampleCar extends SDKDomain
{
    private $builtDate;
    
    /**
     *
     * @return
     *
     */
    public function getBuiltDate()
    {
        return $this->builtDate;
    }
    
    /**
     * 设置
     *
     * @param Date $builtDate
     *        	参数示例：<pre></pre>
     *        	此参数必填
     */
    public function setBuiltDate($builtDate)
    {
        $this->builtDate = $builtDate;
    }
    private $boughtDate;
    
    /**
     *
     * @return
     *
     */
    public function getBoughtDate()
    {
        return $this->boughtDate;
    }
    
    /**
     * 设置
     *
     * @param Date $boughtDate
     *        	参数示例：<pre></pre>
     *        	此参数必填
     */
    public function setBoughtDate($boughtDate)
    {
        $this->boughtDate = $boughtDate;
    }
    private $name;
    
    /**
     *
     * @return
     *
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * 设置
     *
     * @param String $name
     *        	参数示例：<pre></pre>
     *        	此参数必填
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    private $builtArea;
    
    /**
     *
     * @return
     *
     */
    public function getBuiltArea()
    {
        return $this->builtArea;
    }
    
    /**
     * 设置
     *
     * @param String $builtArea
     *        	参数示例：<pre></pre>
     *        	此参数必填
     */
    public function setBuiltArea($builtArea)
    {
        $this->builtArea = $builtArea;
    }
    private $carNumber;
    
    /**
     *
     * @return
     *
     */
    public function getCarNumber()
    {
        return $this->carNumber;
    }
    
    /**
     * 设置
     *
     * @param String $carNumber
     *        	参数示例：<pre></pre>
     *        	此参数必填
     */
    public function setCarNumber($carNumber)
    {
        $this->carNumber = $carNumber;
    }
    private $price;
    
    /**
     *
     * @return
     *
     */
    public function getPrice()
    {
        return $this->price;
    }
    
    /**
     * 设置
     *
     * @param Double $price
     *        	参数示例：<pre></pre>
     *        	此参数必填
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }
    private $seats;
    
    /**
     *
     * @return
     *
     */
    public function getSeats()
    {
        return $this->seats;
    }
    
    /**
     * 设置
     *
     * @param Integer $seats
     *        	参数示例：<pre></pre>
     *        	此参数必填
     */
    public function setSeats($seats)
    {
        $this->seats = $seats;
    }
    private $stdResult;
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("builtDate", (array) $this->stdResult)) {
            $this->builtDate = $this->stdResult->{"builtDate"};
        }
        if (array_key_exists("boughtDate",(array)  $this->stdResult)) {
            $this->boughtDate = $this->stdResult->{"boughtDate"};
        }
        if (array_key_exists("name", (array) $this->stdResult)) {
            $this->name = $this->stdResult->{"name"};
        }
        if (array_key_exists("builtArea", (array) $this->stdResult)) {
            $this->builtArea = $this->stdResult->{"builtArea"};
        }
        if (array_key_exists("carNumber",(array)  $this->stdResult)) {
            $this->carNumber = $this->stdResult->{"carNumber"};
        }
        if (array_key_exists("price",(array)  $this->stdResult)) {
            $this->price = $this->stdResult->{"price"};
        }
        if (array_key_exists("seats",(array)  $this->stdResult)) {
            $this->seats = $this->stdResult->{"seats"};
        }
    }
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("builtDate",(array)  $this->arrayResult)) {
            $this->builtDate = $arrayResult ['builtDate'];
        }
        if (array_key_exists("boughtDate",(array)  $this->arrayResult)) {
            $this->boughtDate = $arrayResult ['boughtDate'];
        }
        if (array_key_exists("name",(array)  $this->arrayResult)) {
            $this->name = $arrayResult ['name'];
        }
        if (array_key_exists("builtArea",(array)  $this->arrayResult)) {
            $this->builtArea = $arrayResult ['builtArea'];
        }
        if (array_key_exists("carNumber",(array)  $this->arrayResult)) {
            $this->carNumber = $arrayResult ['carNumber'];
        }
        if (array_key_exists("price",(array)  $this->arrayResult)) {
            $this->price = $arrayResult ['price'];
        }
        if (array_key_exists("seats", (array) $this->arrayResult)) {
            $this->seats = $arrayResult ['seats'];
        }
    }
}
