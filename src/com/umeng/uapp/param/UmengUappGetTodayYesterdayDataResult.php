<?php
namespace Ranj\UmengOpenAPI\com\umeng\uapp\param;

use Ranj\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Ranj\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;
use Ranj\UmengOpenAPI\com\umeng\uapp\param\UmengUappDailyDataInfo;

class UmengUappGetTodayYesterdayDataResult
{
    private $todayData;

    /**
    * @return
    */
    public function getTodayData()
    {
        return $this->todayData;
    }

    /**
     * 设置
     * @param UmengUappDailyDataInfo $todayData

     * 此参数必填     */
    public function setTodayData(UmengUappDailyDataInfo $todayData)
    {
        $this->todayData = $todayData;
    }


    private $yesterdayData;

    /**
    * @return
    */
    public function getYesterdayData()
    {
        return $this->yesterdayData;
    }

    /**
     * 设置
     * @param UmengUappDailyDataInfo $yesterdayData

     * 此参数必填     */
    public function setYesterdayData(UmengUappDailyDataInfo $yesterdayData)
    {
        $this->yesterdayData = $yesterdayData;
    }


    private $stdResult;

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("todayData",(array)  $this->stdResult)) {
            $todayDataResult=$this->stdResult->{"todayData"};
            $this->todayData = new UmengUappDailyDataInfo();
            $this->todayData->setStdResult($todayDataResult);
        }
        if (array_key_exists("yesterdayData",(array)  $this->stdResult)) {
            $yesterdayDataResult=$this->stdResult->{"yesterdayData"};
            $this->yesterdayData = new UmengUappDailyDataInfo();
            $this->yesterdayData->setStdResult($yesterdayDataResult);
        }
    }

    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("todayData",(array)  $this->arrayResult)) {
            $todayDataResult=$arrayResult['todayData'];
            $this->todayData = new UmengUappDailyDataInfo();
            $this->todayData->setStdResult($todayDataResult);
        }
        if (array_key_exists("yesterdayData",(array)  $this->arrayResult)) {
            $yesterdayDataResult=$arrayResult['yesterdayData'];
            $this->yesterdayData = new UmengUappDailyDataInfo();
            $this->yesterdayData->setStdResult($yesterdayDataResult);
        }
    }
}
