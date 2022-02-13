<?php

namespace Nikrovir\SpatieDtoCommands;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputArgument;

class MakeDTOCaster extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'services:caster';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new dto caster file';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Caster';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/Stubs/make-dto-caster.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param string $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return 'App\Services\DTO\Caster';
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['name', InputArgument::REQUIRED, 'The name of the dto caster.'],
        ];
    }
}
