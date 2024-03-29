<?php
namespace Ranj\UmengOpenAPI\com\umeng\umini\param;

use Ranj\UmengOpenAPI\com\alibaba\openapi\client\entity\SDKDomain;
use Ranj\UmengOpenAPI\com\alibaba\openapi\client\entity\ByteArray;

class UmengUminiAppIndicatorDTO extends SDKDomain
{
    private $dateTime;
    
    /**
    * @return 时间
    */
    public function getDateTime()
    {
        return $this->dateTime;
    }
    
    /**
     * 设置时间
     * @param String $dateTime
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setDateTime($dateTime)
    {
        $this->dateTime = $dateTime;
    }
    
            
    private $newUser;
    
    /**
    * @return 新增用户
    */
    public function getNewUser()
    {
        return $this->newUser;
    }
    
    /**
     * 设置新增用户
     * @param Long $newUser
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setNewUser($newUser)
    {
        $this->newUser = $newUser;
    }
    
            
    private $activeUser;
    
    /**
    * @return 活跃用户
    */
    public function getActiveUser()
    {
        return $this->activeUser;
    }
    
    /**
     * 设置活跃用户
     * @param Long $activeUser
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setActiveUser($activeUser)
    {
        $this->activeUser = $activeUser;
    }
    
            
    private $launch;
    
    /**
    * @return 打开次数
    */
    public function getLaunch()
    {
        return $this->launch;
    }
    
    /**
     * 设置打开次数
     * @param Long $launch
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setLaunch($launch)
    {
        $this->launch = $launch;
    }
    
            
    private $visitTimes;
    
    /**
    * @return 页面访问次数
    */
    public function getVisitTimes()
    {
        return $this->visitTimes;
    }
    
    /**
     * 设置页面访问次数
     * @param Long $visitTimes
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setVisitTimes($visitTimes)
    {
        $this->visitTimes = $visitTimes;
    }
    
            
    private $onceDuration;
    
    /**
    * @return 次均停留时长
    */
    public function getOnceDuration()
    {
        return $this->onceDuration;
    }
    
    /**
     * 设置次均停留时长
     * @param String $onceDuration
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setOnceDuration($onceDuration)
    {
        $this->onceDuration = $onceDuration;
    }
    
            
    private $dailyDuration;
    
    /**
    * @return 人均停留时长
    */
    public function getDailyDuration()
    {
        return $this->dailyDuration;
    }
    
    /**
     * 设置人均停留时长
     * @param String $dailyDuration
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setDailyDuration($dailyDuration)
    {
        $this->dailyDuration = $dailyDuration;
    }
    
        
    private $stdResult;
    
    public function setStdResult($stdResult)
    {
        $this->stdResult = $stdResult;
        if (array_key_exists("dateTime",(array)  $this->stdResult)) {
            $this->dateTime = $this->stdResult->{"dateTime"};
        }
        if (array_key_exists("newUser",(array)  $this->stdResult)) {
            $this->newUser = $this->stdResult->{"newUser"};
        }
        if (array_key_exists("activeUser", (array) $this->stdResult)) {
            $this->activeUser = $this->stdResult->{"activeUser"};
        }
        if (array_key_exists("launch", (array) $this->stdResult)) {
            $this->launch = $this->stdResult->{"launch"};
        }
        if (array_key_exists("visitTimes",(array)  $this->stdResult)) {
            $this->visitTimes = $this->stdResult->{"visitTimes"};
        }
        if (array_key_exists("onceDuration",(array)  $this->stdResult)) {
            $this->onceDuration = $this->stdResult->{"onceDuration"};
        }
        if (array_key_exists("dailyDuration",(array)  $this->stdResult)) {
            $this->dailyDuration = $this->stdResult->{"dailyDuration"};
        }
    }
    
    private $arrayResult;
    public function setArrayResult($arrayResult)
    {
        $this->arrayResult = $arrayResult;
        if (array_key_exists("dateTime",(array) $this->arrayResult)) {
            $this->dateTime = $arrayResult['dateTime'];
        }
        if (array_key_exists("newUser",(array)  $this->arrayResult)) {
            $this->newUser = $arrayResult['newUser'];
        }
        if (array_key_exists("activeUser", (array) $this->arrayResult)) {
            $this->activeUser = $arrayResult['activeUser'];
        }
        if (array_key_exists("launch",(array)  $this->arrayResult)) {
            $this->launch = $arrayResult['launch'];
        }
        if (array_key_exists("visitTimes", (array) $this->arrayResult)) {
            $this->visitTimes = $arrayResult['visitTimes'];
        }
        if (array_key_exists("onceDuration", (array) $this->arrayResult)) {
            $this->onceDuration = $arrayResult['onceDuration'];
        }
        if (array_key_exists("dailyDuration",(array)  $this->arrayResult)) {
            $this->dailyDuration = $arrayResult['dailyDuration'];
        }
    }
}
