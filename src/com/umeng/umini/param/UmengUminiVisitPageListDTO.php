<?php
namespace Ranj\UmengOpenAPI\com\umeng\umini\param;

use ArrayObject;
use Ranj\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Ranj\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;
use Ranj\UmengOpenAPI\com\umeng\umini\param\UmengUminiVisitPageDTO;

class UmengUminiVisitPageListDTO extends SDKDomain
{
    private $currentPage;

    /**
    * @return 当前页码
    */
    public function getCurrentPage()
    {
        return $this->currentPage;
    }

    /**
     * 设置当前页码
     * @param Integer $currentPage
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setCurrentPage($currentPage)
    {
        $this->currentPage = $currentPage;
    }


    private $data;

    /**
    * @return
    */
    public function getData()
    {
        return $this->data;
    }

    /**
     * 设置
     * @param array include @see UmengUminiVisitPageDTO[] $data
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setData(UmengUminiVisitPageDTO $data)
    {
        $this->data = $data;
    }


    private $totalCount;

    /**
    * @return 总条数
    */
    public function getTotalCount()
    {
        return $this->totalCount;
    }

    /**
     * 设置总条数
     * @param Integer $totalCount
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setTotalCount($totalCount)
    {
        $this->totalCount = $totalCount;
    }


    private $stdResult;

    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("currentPage",(array)  $this->stdResult)) {
            $this->currentPage = $this->stdResult->{"currentPage"};
        }
        if (array_key_exists("data", (array) $this->stdResult)) {
            $dataResult=$this->stdResult->{"data"};
            $object = json_decode(json_encode($dataResult), true);
            $this->data = array();
            for ($i = 0; $i < count($object); $i ++) {
                $arrayobject = new ArrayObject($object [$i]);
                $UmengUminiVisitPageDTOResult=new UmengUminiVisitPageDTO();
                $UmengUminiVisitPageDTOResult->setArrayResult($arrayobject);
                $this->data [$i] = $UmengUminiVisitPageDTOResult;
            }
        }
        if (array_key_exists("totalCount", (array) $this->stdResult)) {
            $this->totalCount = $this->stdResult->{"totalCount"};
        }
    }

    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("currentPage", (array) $this->arrayResult)) {
            $this->currentPage = $arrayResult['currentPage'];
        }
        if (array_key_exists("data",(array)  $this->arrayResult)) {
            $dataResult=$arrayResult['data'];
            $this->data = new UmengUminiVisitPageDTO();
            $this->data->setStdResult($dataResult);
        }
        if (array_key_exists("totalCount",(array)  $this->arrayResult)) {
            $this->totalCount = $arrayResult['totalCount'];
        }
    }
}
