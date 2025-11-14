<?php
declare(strict_types=1);

namespace Modules\Post\Core\Database\Seeders;

final class PostSeeder
{
    public function run(): void
    {
        echo "[seed] Post ok\n";
    }
}

return new PostSeeder();