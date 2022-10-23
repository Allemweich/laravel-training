```bash
sail composer require --dev infection/infection
sail up
sail test
sail exec laravel.test vendor/bin/infection
```

https://infection.github.io/guide/mutators.html
https://infection-php.dev/
