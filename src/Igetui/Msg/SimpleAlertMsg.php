<?php

namespace Zawa\Getui\Igetui\Msg;

class SimpleAlertMsg implements ApnMsg
{
    var $alertMsg;

    public function get_alertMsg()
    {
        return $this->alertMsg;
    }
}