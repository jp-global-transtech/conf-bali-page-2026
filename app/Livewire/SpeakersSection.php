<?php

namespace App\Livewire;

use Livewire\Attributes\Computed;
use Livewire\Attributes\Locked;
use Livewire\Component;

class SpeakersSection extends Component
{
    #[Locked]
    public string $roleFilter = 'all';

    #[Locked]
    public string $countryFilter = 'all';

    #[Locked]
    public ?array $modalSpeaker = null;

    #[Computed]
    public function speakers(): array
    {
        return collect(include resource_path('data/speakers.php'))
            ->values()
            ->all();
    }

    #[Computed]
    public function chiefPatron(): array
    {
        return collect($this->speakers())
            ->where('role', 'plenary')
            ->filter($this->applyFilters(...))
            ->values()
            ->all();
    }

    #[Computed]
    public function invited(): array
    {
        return collect($this->speakers())
            ->where('role', 'invited')
            ->filter($this->applyFilters(...))
            ->values()
            ->all();
    }

    #[Computed]
    public function stats(): array
    {
        return [
            'total' => collect($this->speakers())->where('confirmed', true)->count(),
            'plenary' => collect($this->speakers())->where('role', 'plenary')->where('confirmed', true)->count(),
            'invited' => collect($this->speakers())->where('role', 'invited')->where('confirmed', true)->count(),
            'countries' => collect($this->speakers())->pluck('country')->unique()->count(),
        ];
    }

    protected function applyFilters(array $speaker): bool
    {
        $roleMatch = $this->roleFilter === 'all'
            || $this->roleFilter === 'plenary' && $speaker['role'] === 'plenary'
            || $this->roleFilter === 'invited' && $speaker['role'] === 'invited';

        $countryMatch = $this->countryFilter === 'all'
            || $speaker['country'] === $this->countryFilter;

        return $roleMatch && $countryMatch;
    }

    public function setRoleFilter(string $filter): void
    {
        $this->roleFilter = $filter;
    }

    public function setCountryFilter(string $filter): void
    {
        $this->countryFilter = $filter;
    }

    public function openModal(int $speakerId): void
    {
        $this->modalSpeaker = collect($this->speakers())->firstWhere('id', $speakerId);
    }

    public function closeModal(): void
    {
        $this->modalSpeaker = null;
    }

    public function render(): \Illuminate\View\View
    {
        return view('livewire.speakers-section');
    }
}
