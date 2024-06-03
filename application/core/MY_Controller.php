<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Jenssegers\Blade\Blade;
use Illuminate\Container\Container;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Events\Dispatcher;

class MY_Controller extends CI_Controller {
    protected $blade;

    public function __construct() {
        parent::__construct();

        $views = APPPATH . 'views';
        $cache = APPPATH . 'cache';

        // Membuat instance container dan dispatcher
        $container = new Container;
        $container->singleton('files', function () {
            return new Filesystem;
        });
        $dispatcher = new Dispatcher($container);

        // Menginisialisasi Blade
        $this->blade = new Blade($views, $cache, $container, $dispatcher);
    }

    protected function render($view, $data = []) {
        echo $this->blade->render($view, $data);
    }
}
