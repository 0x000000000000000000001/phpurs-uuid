<?php

$getUUIDImpl = function() {
    return \Symfony\Component\Uid\Uuid::v4()->toRfc4122();
};

$validateV4UUID = function($str) {
    return \Symfony\Component\Uid\Uuid::isValid($str);
};

$getUUID3Impl = function($str) {
    return function($namespace) use ($str) {
        return \Symfony\Component\Uid\Uuid::v3(\Symfony\Component\Uid\Uuid::fromString($namespace), $str)->toRfc4122();
    };
};

$getUUID5Impl = function($str) {
    return function($namespace) use ($str) {
        return \Symfony\Component\Uid\Uuid::v5(\Symfony\Component\Uid\Uuid::fromString($namespace), $str)->toRfc4122();
    };
};

return [
    'getUUIDImpl' => $getUUIDImpl,
    'validateV4UUID' => $validateV4UUID,
    'getUUID3Impl' => $getUUID3Impl,
    'getUUID5Impl' => $getUUID5Impl
];
