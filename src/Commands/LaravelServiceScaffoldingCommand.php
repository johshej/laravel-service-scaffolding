<?php

namespace CringeJPG\LaravelServiceScaffolding\Commands;

use Illuminate\Console\Command;
use function Laravel\Prompts\text;

class LaravelServiceScaffoldingCommand extends Command
{
    public $signature = 'make:service {name?}';

    public $description = 'My command';

    public function handle(): int
    {
        $name = $this->argument('name')
            ?? text(
                label: 'What should the service be named?',
                placeholder: 'E.g. UserService',
                required: 'The name is required'
            );

        if (file_exists(app_path("Services"))) {
            if (file_exists(app_path("Services/{$name}.php"))) {
                $this->error("app/Services/{$name}.php already exists!");

                return self::FAILURE;
            }
            else {
                file_put_contents(
                    app_path("Services/{$name}.php"),
                    str_replace(
                        ['{{class}}'],
                        [$name],
                        file_get_contents(__DIR__ . '../../../resources/stubs/service.stub')
                    )
                );
            }
        }
        else {
            mkdir(app_path("Services"));
            file_put_contents(
                app_path("Services/{$name}.php"),
                str_replace(
                    ['{{ class }}'],
                    [$name],
                    file_get_contents(__DIR__ . '../../../resources/stubs/service.stub')
                )
            );
        }

        $this->info("app/Services/{$name}.php created successfully!");

        return self::SUCCESS;
    }
}
