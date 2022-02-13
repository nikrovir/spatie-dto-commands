<?php

namespace App\CommandBus\Handler;

use Spatie\DataTransferObject\DataTransferObject;

abstract class BaseHandler
{
    protected bool $isTransactional = true;
    protected int $numberOfAttempts = 1;

    abstract protected function handleCommand($command);

    final public function handle(DataTransferObject $dto) {
        if (!$this->isTransactional) {
            return $this->handleCommand($dto);
        }

        $self = $this;
        return \DB::transaction(function() use($self, $dto) {
            return $self->handleCommand($dto);
        }, $this->numberOfAttempts);
    }
}
