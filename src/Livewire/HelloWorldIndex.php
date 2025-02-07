<?php

namespace Custom\HelloWorld\Livewire;

use Livewire\Component;

class HelloWorldIndex extends Component
{
    public $message = 'Hello from Sales Package!';

    public function render()
    {
        return view('helloworld::livewire.helloworld-index');
    }
}
