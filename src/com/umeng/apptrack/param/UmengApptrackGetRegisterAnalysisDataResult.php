<?php
namespace Ranj\UmengOpenAPI\com\umeng\apptrack\param;

use ArrayObject;
use Ranj\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Ranj\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;
use Ranj\UmengOpenAPI\com\umeng\apptrack\param\UmengApptrackGetRegisterAnalysis;

class UmengApptrackGetRegisterAnalysisDataResult
{
    private $data;
    
    /**
    * @return 注册事件列表
    */
    public function getData()
    {
        return $this->data;
    }
    
    /**
     * 设置注册事件列表
     * @param array include @see UmengApptrackGetRegisterAnalysis[] $data

     * 此参数必填     */
    public function setData(UmengApptrackGetRegisterAnalysis $data)
    {
        $this->data = $data;
    }
    
            
    private $total;
    
    /**
    * @return 总数
    */
    public function getTotal()
    {
        return $this->total;
    }
    
    /**
     * 设置总数
     * @param Integer $total

     * 此参数必填     */
    public function setTotal($total)
    {
        $this->total = $total;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("data",(array)  $this->stdResult)) {
            $dataResult=$this->stdResult->{"data"};
            $object = json_decode(json_encode($dataResult), true);
            $this->data = array();
            for ($i = 0; $i < count($object); $i ++) {
                $arrayobject = new ArrayObject($object [$i]);
                $UmengApptrackGetRegisterAnalysisResult=new UmengApptrackGetRegisterAnalysis();
                $UmengApptrackGetRegisterAnalysisResult->setArrayResult($arrayobject);
                $this->data [$i] = $UmengApptrackGetRegisterAnalysisResult;
            }
        }
        if (array_key_exists("total",(array)  $this->stdResult)) {
            $this->total = $this->stdResult->{"total"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("data", (array) $this->arrayResult)) {
            $dataResult=$arrayResult['data'];
            $this->data = new UmengApptrackGetRegisterAnalysis();
            $this->data->setStdResult($dataResult);
        }
        if (array_key_exists("total",(array)  $this->arrayResult)) {
            $this->total = $arrayResult['total'];
        }
    }
}
