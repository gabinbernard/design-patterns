<?php

//
// "Singleton" design pattern
//

class OperatingSystem {
    private static OperatingSystem $os;
    private int $version;

    private function __construct(int $version) {
        $this->version = $version;
    }

    public static function get() {
        if (!isset(self::$os)) {
            self::$os = new OperatingSystem(1);
        }
        return self::$os;
    }

    public function getVersion(): int {
        return $this->version;
    }

    public function setVersion(int $version): void {
        $this->version = $version;
    }

    public function printVersion(): void {
        echo "The operating system's version is {$this->version}.0" . PHP_EOL;
    }
}

// Code example

$os = OperatingSystem::get();
$os->printVersion();
$os->setVersion(2);
$os->printVersion();

$another_os = OperatingSystem::get();
$another_os->printVersion();

$third_os = OperatingSystem::get();
$third_os->setVersion(3);
$os->printVersion();