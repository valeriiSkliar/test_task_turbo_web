# test_task_turbo_web

- run ` composer install `
- запустити тести ` phpunit ./test/DogTests.php `
- для взаємодії з веб интерфейсом необхідно запустити вбудований сервер PHP ` php -S localhost:8000 `
- консольний интерфейс працюе через виклик команди ` ./dog_cli.php [тип собаки] [дія] `

Команди для консольного интерфейсу

| Типи           | Дії        |
|----------------|------------|
| shiba-inu      | sound,hunt |
| mops           | sound      |
| taxa           | sound,hunt |
| plush_labrador | -  -       |
| rubber_taxa    | sound      |
