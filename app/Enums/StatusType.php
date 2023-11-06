<?php

namespace App\Enums;

enum StatusType: string
{

    case STARTED = 'staeted';
    case IN_PROGRESS = 'in_progress';
    case DONE = 'done';
}
