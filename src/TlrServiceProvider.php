<?php
    // MyVendor\tlrgaurav\src\TlrServiceProvider.php
    namespace tlr\tlrgaurav;
    use Illuminate\Support\ServiceProvider;
    class TlrServiceProvider extends ServiceProvider {
        public function boot()
        {
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        }
        public function register()
        {
        }
    }
    ?>
