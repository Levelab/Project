<?php
namespace Levelab\Model\Project\Entity;

use Levelab\Model\Core\Types\Author;
use Levelab\Model\Core\Types\Container;
use Levelab\Model\Project\Values\ProjectId;
use Levelab\Model\Project\Values\ProjectProfile;

class Project {
    /**
     * @var ProjectId
     */
    private $id;
    /**
     * @var Container
     */
    private $thematic;
    /**
     * @var ProjectProfile
     */
    private $profile;
    /**
     * @var Author
     */
    private $owner;

    /**
     * @param ProjectId $id
     * @param Container $thematic
     * @param ProjectProfile $projectProfile
     * @param Author $owner
     */
    public function __construct(ProjectId $id, Container $thematic, ProjectProfile $projectProfile, Author $owner) {
        $this->id = $id;
        $this->thematic = $thematic;
        $this->profile = $projectProfile;
        $this->owner = $owner;
    }

    /**
     * @return ProjectId
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return ProjectProfile
     */
    public function getProfile() {
        return $this->profile;
    }

    /**
     * @return Container
     */
    public function getThematic() {
        return $this->thematic;
    }

    /**
     * @param ProjectProfile $projectProfile
     */
    public function setProfile(ProjectProfile $projectProfile) {
        $this->profile = $projectProfile;
    }

    /**
     * @param Author $owner
     */
    public function setAuthor(Author $owner) {
        $this->owner = $owner;
    }

    /**
     * @return Author
     */
    public function getOwner() {
        return $this->owner;
    }
} 