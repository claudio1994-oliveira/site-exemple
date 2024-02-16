<?php

declare(strict_types=1);

namespace App\Controller;


class SiteController
{
    public function render(): void
    {
        view("site.index", ['title' => "Bem vindo!"]);
    }
}
