<?php

namespace Data\UUID;

use Symfony\Component\Uid\Uuid;

$Data_UUID_getUUIDImpl = function() {
    return Uuid::v4()->toRfc4122();
};
