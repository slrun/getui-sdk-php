<?php
namespace wh\getui\core;

use wh\getui\protobuf\type\PBEnum;

class ReqServListResultCode extends PBEnum
{
  const successed  = 0;
  const failed  = 1;
  const busy  = 2;
}
