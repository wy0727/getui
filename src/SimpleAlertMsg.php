<?php
namespace getuisdk;

/**
 * Class SimpleAlertMsg
 * @package getuisdk
 */
class SimpleAlertMsg implements ApnMsg
{
    /**
     * @var string
     */
    public $alertMsg;

    /**
     * @return string
     */
    public function getAlertMsg()
    {
        return $this->alertMsg;
    }
}
