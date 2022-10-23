```bash
sail composer require --dev infection/infection
sail up
sail test
sail exec laravel.test vendor/bin/infection
```
