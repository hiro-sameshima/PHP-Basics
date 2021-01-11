<?php
//nullを渡す

declare(strict_types = 1);

function getAward(?int $score): ?string {
 return $score >= 80 ? "Gold" : null;

}

echo getAward(110);