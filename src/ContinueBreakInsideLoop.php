<?php

declare(strict_types=1);

namespace App;

use App\Controller\PREFERENCEController;
use function bar as functionBar;
use function afunc;

class ContinueBreakInsideLoop
{
    public function invalidContinueUsage(string $value): void
    {
        if ($value === 'b') {
            continue;
        }

        echo $value;
    }

    public function validContinueUsage(): void
    {
        foreach (['a', 'b', 'c'] as $value) {
            if ($value === 'b') {
                continue;
            }

            echo $value;
        }
    }

    /**
     * Some comments here
     * @param  bool $value
     * @return void
     */
    public function invalidBreakUsage(bool $value): bool
    {
        if ($value) {
            break;
        }

        return true;
    }

    public function invalidContinueUsageWithOtherErrors(bool $value): bool
    {
        if ($value) {
            continue;
        }

        $array = [1, , 2, 3, 4];

        return true;
    }
}