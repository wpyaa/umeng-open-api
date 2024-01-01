<?php
namespace Roiwk\UmengOpenAPI\com\umeng\umini\param;

use Roiwk\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Roiwk\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;
use Roiwk\UmengOpenAPI\com\umeng\umini\param\UmengUminiVisitPageListDTO;

class UmengUminiGetVisitPageListResult
{
    private $data;
    
    /**
    * @return 数据详情
    */
    public function getData()
    {
        return $this->data;
    }
    
    /**
     * 设置数据详情
     * @param UmengUminiVisitPageListDTO $data

     * 此参数必填     */
    public function setData(UmengUminiVisitPageListDTO $data)
    {
        $this->data = $data;
    }
    
            
    private $msg;
    
    /**
    * @return
    */
    public function getMsg()
    {
        return $this->msg;
    }
    
    /**
     * 设置
     * @param String $msg

     * 此参数必填     */
    public function setMsg($msg)
    {
        $this->msg = $msg;
    }
    
            
    private $code;
    
    /**
    * @return
    */
    public function getCode()
    {
        return $this->code;
    }
    
    /**
     * 设置
     * @param Long $code

     * 此参数必填     */
    public function setCode($code)
    {
        $this->code = $code;
    }
    
            
    private $success;
    
    /**
    * @return
    */
    public function getSuccess()
    {
        return $this->success;
    }
    
    /**
     * 设置
     * @param Boolean $success

     * 此参数必填     */
    public function setSuccess($success)
    {
        $this->success = $success;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("data", $this->stdResult)) {
            $dataResult=$this->stdResult->{"data"};
            $this->data = new UmengUminiVisitPageListDTO();
            $this->data->setStdResult($dataResult);
        }
        if (array_key_exists("msg", $this->stdResult)) {
            $this->msg = $this->stdResult->{"msg"};
        }
        if (array_key_exists("code", $this->stdResult)) {
            $this->code = $this->stdResult->{"code"};
        }
        if (array_key_exists("success", $this->stdResult)) {
            $this->success = $this->stdResult->{"success"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("data", $this->arrayResult)) {
            $dataResult=$arrayResult['data'];
            $this->data = new UmengUminiVisitPageListDTO();
            $this->data->setStdResult($dataResult);
        }
        if (array_key_exists("msg", $this->arrayResult)) {
            $this->msg = $arrayResult['msg'];
        }
        if (array_key_exists("code", $this->arrayResult)) {
            $this->code = $arrayResult['code'];
        }
        if (array_key_exists("success", $this->arrayResult)) {
            $this->success = $arrayResult['success'];
        }
    }
}