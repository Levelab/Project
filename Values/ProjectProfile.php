<?php
namespace Levelab\Model\Project\Values;

class ProjectProfile {
    private $name;
    private $description;

    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description) {
        $this->description = $description;
    }

    /**
     * @param mixed $name
     */
    public function setName($name) {
        $this->name = $name;
    }
} 