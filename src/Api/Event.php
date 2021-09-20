<?php

declare(strict_types=1);

namespace OwenVoke\POAP\Api;

class Event extends AbstractApi
{
    public function all(array $parameters = []): array
    {
        return $this->get('/events', $parameters);
    }

    public function show(int $id): array
    {
        return $this->get("/events/id/{$id}");
    }

    public function showBySlug(string $slug): array
    {
        return $this->get("/events/{$slug}");
    }

    public function validate(int $id, string $secretCode): array
    {
        return $this->post('/events/validate', [
            'event_id' => $id,
            'secret_code' => $secretCode,
        ]);
    }
}
