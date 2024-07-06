<?php

//
// "Abstract Factory" design pattern
//

interface Photoshop {
    public function install();
    public function uninstall();
}

class Photoshop2023 implements Photoshop {
    public function install() {
        echo "Installing Photoshop (2023)\n";
    }

    public function uninstall() {
        echo "Uninsalling Photoshop (2023)\n";
    }
}

class Photoshop2024 implements Photoshop {
    public function install() {
        echo "Installing Photoshop (2024)\n";
    }

    public function uninstall() {
        echo "Uninstalling Photoshop (2024)\n";
    }
}

interface Illustrator {
    public function install();
    public function uninstall();
}

class Illustrator2023 implements Illustrator {
    public function install() {
        echo "Installing Illustrator (2023)" . PHP_EOL;
    }

    public function uninstall() {
        echo "Uninsalling Illustrator (2023)" . PHP_EOL;
    }
}

class Illustrator2024 implements Illustrator {
    public function install() {
        echo "Installing Illustrator (2024)" . PHP_EOL;
    }

    public function uninstall() {
        echo "Uninstalling Illustrator (2024)" . PHP_EOL;
    }
}

interface AdobeCCFactory {
    public function createPhotoshop(): Photoshop;
    public function createIllustrator(): Illustrator;
}

class AdobeCC2023Factory implements AdobeCCFactory {
    public function createPhotoshop(): Photoshop {
        return new Photoshop2023;
    }

    public function createIllustrator(): Illustrator {
        return new Illustrator2023;
    }
}

class AdobeCC2024Factory implements AdobeCCFactory {
    public function createPhotoshop(): Photoshop {
        return new Photoshop2024;
    }

    public function createIllustrator(): Illustrator {
        return new Illustrator2024;
    }
}

class AdobeCC {
    private AdobeCCFactory $adobeCCFactory;
    private Photoshop $photoshop;
    private Illustrator $illustrator;

    public function __construct(AdobeCCFactory $factory) {
        $this->adobeCCFactory = $factory;
    }

    function installSoftwares() {
        $this->photoshop = $this->adobeCCFactory->createPhotoshop();
        $this->photoshop->install();
        $this->illustrator = $this->adobeCCFactory->createIllustrator();
        $this->illustrator->install();
    }
}

// Code example

$AdobeCC2024 = new AdobeCC(new AdobeCC2024Factory());
$AdobeCC2024->installSoftwares();