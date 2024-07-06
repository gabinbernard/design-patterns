<?php

//
// "Factory" design pattern
//

interface OperatingSystem {
    function startUp();
    function shutDown();
}

class Android implements OperatingSystem {
    function startUp() {
        echo "Starting up Android\n";
    }
    function shutDown() {
        echo "Shutting down Android\n";
    }
}

class IOS implements OperatingSystem {
    function startUp() {
        echo "Starting up iOS\n";
    }
    function shutDown() {
        echo "Shutting down iOS\n";
    }
}

class Huawei implements OperatingSystem {
    function startUp() {
        echo "Starting up Huawei\n";
    }
    function shutDown() {
        echo "Shutting down Huawei\n";
    }
}

abstract class Phone {
    abstract public function createOperatingSystem(): OperatingSystem;

    public function startUp() {
        $operatingSystem = $this->createOperatingSystem();
        $operatingSystem->startUp();
    }

    public function shutDown() {
        $operatingSystem = $this->createOperatingSystem();
        $operatingSystem->shutDown();
    }
}

class SamsungPhone extends Phone {
    public function createOperatingSystem(): OperatingSystem {
        return new Android();
    }
}

class ApplePhone extends Phone {
    public function createOperatingSystem(): OperatingSystem {
        return new IOS();
    }
}

class HuaweiPhone extends Phone {
    public function createOperatingSystem(): OperatingSystem {
        return new Huawei();
    }
}

// Code example

$phone1 = new SamsungPhone();
$phone1->startUp();
$phone1->shutDown();

$phone2 = new ApplePhone();
$phone2->startUp();
$phone2->shutDown();

$phone3 = new HuaweiPhone();
$phone3->startUp();
$phone3->shutDown();