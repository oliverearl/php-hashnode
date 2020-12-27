<?php

namespace Hashnode\Api\Enums;

use SplEnum;

class FeedType extends SplEnum
{
    const COMMUNITY     = 'COMMUNITY';
    const BEST          = 'BEST';
    const NEW           = 'NEW';
    const FEATURED      = 'FEATURED';

    const __default     = self::NEW;
}
