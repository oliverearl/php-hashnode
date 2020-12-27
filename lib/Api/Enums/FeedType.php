<?php

namespace Hashnode\Api\Enums;

use MyCLabs\Enum\Enum;

class FeedType extends Enum
{
    private const COMMUNITY     = 'COMMUNITY';
    private const BEST          = 'BEST';
    private const NEW           = 'NEW';
    private const FEATURED      = 'FEATURED';
}
