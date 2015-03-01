<?php
namespace Levelab\Model\Project\Repository;

use Levelab\Model\Core\Types\Author;
use Levelab\Model\Core\Types\Container;
use Levelab\Model\Project\Entity\Project;
use Levelab\Model\Project\Values\ProjectId;

interface ProjectRepository {
    public function find(ProjectId $projectId);

    public function findAll();

    public function add(Project $project);

    public function remove(Project $project);

    public function findByAuthor(Author $author);

    public function findByContainer(Container $container);
}