<?php
namespace Ranj\UmengOpenAPI\com\umeng\uapp\param;

use Ranj\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Ranj\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;

class UmengUappCountDataNameValue extends SDKDomain
{
    private $name;
    
    /**
    * @return 版本或渠道名
    */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * 设置版本或渠道名
     * @param String $name
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
            
    private $value;
    
    /**
    * @return 统计数
    */
    public function getValue()
    {
        return $this->value;
    }
    
    /**
     * 设置统计数
     * @param Integer $value
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setValue($value)
    {
        $this->value = $value;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("name",(array)  $this->stdResult)) {
            $this->name = $this->stdResult->{"name"};
        }
        if (array_key_exists("value",(array)  $this->stdResult)) {
            $this->value = $this->stdResult->{"value"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("name", (array) $this->arrayResult)) {
            $this->name = $arrayResult['name'];
        }
        if (array_key_exists("value", (array) $this->arrayResult)) {
            $this->value = $arrayResult['value'];
        }
    }
}
