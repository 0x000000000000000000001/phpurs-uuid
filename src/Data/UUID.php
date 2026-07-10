<?php

namespace Data\UUID;

require_once __DIR__ . '/../../vendor/autoload.php';

use Symfony\Component\Uid\Uuid;

$Data_UUID_getUUIDImpl = function() {
    return Uuid::v4()->toRfc4122();
};
