<?php

interface DatabaseInterface
{
    /**
     * Конструктор
     *
     * @param string $path
     */
    public function __construct(string $path);

    /**
     * Получить всех паользователей
     *
     * @return array
     */
    public function index(): array;

    /**
     * Получить одного пользователя
     *
     * @param int $id
     * @return array
     */
    public function show(int $id): array;

    /**
     * Добавить пользователя
     *
     * @param array $data
     * @return void
     */
    public function store(array $data): void;

    /**
     * Редактировать пользователя
     *
     * @param array $data
     * @param int $id
     * @return void
     */
    public function edit(array $data, int $id): void;

    /**
     * Удалить пользователя
     *
     * @param int $id
     * @return void
     */
    public function destroy(int $id): void;
}