<?php

declare(strict_types=1);

namespace SamPoyigi\Test;

use Igniter\System\Classes\BaseExtension;
use Override;

class Extension extends BaseExtension
{
    #[Override]
    public function boot(): void {}
}
