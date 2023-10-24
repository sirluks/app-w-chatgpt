<?php

namespace App\Enums;

enum Status: string
{
    case PENDING = 'P';
    case ACCEPTED = 'A';
    case CANCELED = 'C';
}