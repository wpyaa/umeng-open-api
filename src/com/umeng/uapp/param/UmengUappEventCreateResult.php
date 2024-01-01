<?php
namespace Roiwk\UmengOpenAPI\com\umeng\uapp\param;

use Roiwk\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Roiwk\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;

class UmengUappEventCreateResult
{
    private $status;
    
    /**
    * @return 响应码
    */
    public function getStatus()
    {
        return $this->status;
    }
    
    /**
     * 设置响应码
     * @param Integer $status

     * 此参数必填     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
    
            
    private $msg;
    
    /**
    * @return 响应信息
    */
    public function getMsg()
    {
        return $this->msg;
    }
    
    /**
     * 设置响应信息
     * @param String $msg

     * 此参数必填     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("status",(array)  $this->stdResult)) {
            $this->status = $this->stdResult->{"status"};
        }
        if (array_key_exists("msg",(array)  $this->stdResult)) {
            $this->msg = $this->stdResult->{"msg"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("status", (array) $this->arrayResult)) {
            $this->status = $arrayResult['status'];
        }
        if (array_key_exists("msg", (array) $this->arrayResult)) {
            $this->msg = $arrayResult['msg'];
        }
    }
}