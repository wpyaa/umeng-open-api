<?php
namespace Ranj\UmengOpenAPI\com\umeng\umini\param;

use Ranj\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Ranj\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;

class UmengUminiCreateMiniAppResult
{
    private $code;
    
    /**
    * @return 状态码
    */
    public function getCode()
    {
        return $this->code;
    }
    
    /**
     * 设置状态码
     * @param Long $code

     * 此参数必填     */
    public function setCode($code)
    {
        $this->code = $code;
    }
    
            
    private $success;
    
    /**
    * @return 状态
    */
    public function getSuccess()
    {
        return $this->success;
    }
    
    /**
     * 设置状态
     * @param Boolean $success

     * 此参数必填     */
    public function setSuccess($success)
    {
        $this->success = $success;
    }
    
            
    private $data;
    
    /**
    * @return 成功时返回新建小程序key
    */
    public function getData()
    {
        return $this->data;
    }
    
    /**
     * 设置成功时返回新建小程序key
     * @param String $data

     * 此参数必填     */
    public function setData($data)
    {
        $this->data = $data;
    }
    
            
    private $msg;
    
    /**
    * @return 返回消息
    */
    public function getMsg()
    {
        return $this->msg;
    }
    
    /**
     * 设置返回消息
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
        if (array_key_exists("code", (array) $this->stdResult)) {
            $this->code = $this->stdResult->{"code"};
        }
        if (array_key_exists("success", (array) $this->stdResult)) {
            $this->success = $this->stdResult->{"success"};
        }
        if (array_key_exists("data",(array)  $this->stdResult)) {
            $this->data = $this->stdResult->{"data"};
        }
        if (array_key_exists("msg", (array) $this->stdResult)) {
            $this->msg = $this->stdResult->{"msg"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("code", (array) $this->arrayResult)) {
            $this->code = $arrayResult['code'];
        }
        if (array_key_exists("success",(array)  $this->arrayResult)) {
            $this->success = $arrayResult['success'];
        }
        if (array_key_exists("data",(array)  $this->arrayResult)) {
            $this->data = $arrayResult['data'];
        }
        if (array_key_exists("msg", (array) $this->arrayResult)) {
            $this->msg = $arrayResult['msg'];
        }
    }
}
