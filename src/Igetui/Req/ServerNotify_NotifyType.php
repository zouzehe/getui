<?php

namespace Zawa\Getui\IGetui\Req;

use Zawa\Getui\Protobuf\Type\PBEnum;

class ServerNotify_NotifyType extends PBEnum
{
    const normal = 0;
    const serverListChanged = 1;
    const exception = 2;
}