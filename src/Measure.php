<?php
declare(strict_types=1);

namespace Collecthor\DataInterfaces;

enum Measure: string
{
    case Nominal = 'nominal';
    case Ordinal = 'ordinal';
    case Scale = 'scale';
}
