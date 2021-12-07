<?php
declare(strict_types=1);

namespace Collecthor\DataInterfaces;

enum Measure
{
    case Nominal;
    case Ordinal;
    case Scale;
}
