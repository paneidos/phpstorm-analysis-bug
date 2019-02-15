This repo is used as a demonstration for a bug in PhpStorm.

To trigger it, run the following commands in the repo:

```
composer install
(cd subproject && composer install)
```

Now open `app/Http/Controllers/HomeController.php` in PhpStorm.

See [https://youtrack.jetbrains.com/issue/WI-45405](https://youtrack.jetbrains.com/issue/WI-45405) for more information.
