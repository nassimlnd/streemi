<?php

namespace App\Entity;

use App\Repository\WatchHistoryRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WatchHistoryRepository::class)]
class WatchHistory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $lastWatched = null;

    #[ORM\Column]
    private ?int $views = null;

    #[ORM\ManyToOne(inversedBy: 'watchHistories')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $watcher = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLastWatched(): ?\DateTimeInterface
    {
        return $this->lastWatched;
    }

    public function setLastWatched(\DateTimeInterface $lastWatched): static
    {
        $this->lastWatched = $lastWatched;

        return $this;
    }

    public function getViews(): ?int
    {
        return $this->views;
    }

    public function setViews(int $views): static
    {
        $this->views = $views;

        return $this;
    }

    public function getWatcher(): ?User
    {
        return $this->watcher;
    }

    public function setWatcher(?User $watcher): static
    {
        $this->watcher = $watcher;

        return $this;
    }
}
