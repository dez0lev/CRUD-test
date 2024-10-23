<?php

class JsonDatabase implements DatabaseInterface
{
    private $path;
    private $data;

    public function __construct(string $path)
    {
        $this->path = $path;
        $this->data = json_decode(file_get_contents($path), true);
    }

    public function index(): array
    {
        return $this->data;
    }

    public function show(int $id): array
    {
        foreach($this->data as $user) {
            if ($user['id'] === $id) {
                return $user;
            }
        }
        return [];
    }

    public function store(array $data): void
    {
        $this->data[] = $data;

        $json = json_encode($this->data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        file_put_contents($this->path, $json);
    }

    public function edit(array $data, int $id): void
    {

        foreach ($this->data as $index => $user) {
            if ($user['id'] === $id) {
                foreach ($data as $key => $value) {
                    $this->data[$index][$key] = $value;
                }
                break;
            }
        }
        $json = json_encode($this->data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        file_put_contents($this->path, $json);
    }

    public function destroy(int $id): void
    {
        foreach ($this->data as $index => $user) {
            if ($user['id'] === $id) {
                    unset($this->data[$index]);
                    break;
            }
        }
        $this->data = array_values($this->data);
        $json = json_encode($this->data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
        file_put_contents($this->path, $json);
    }

}
