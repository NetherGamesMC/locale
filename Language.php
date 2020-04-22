<?php
declare(strict_types=1);

namespace NetherGames\NGEssentials\lang\locale;


interface Language
{
    public function translations(): array;

    public function getName(): string;

    public function getLocale(): string;

    public function getFlag(): string;

    public function getCredits(): string;
}