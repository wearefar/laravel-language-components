<?php

namespace WeAreFar\LanguageComponents\Commands;

use Illuminate\Console\Command;

class LanguageComponentsCommand extends Command
{
    public $signature = 'laravel-language-components';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
