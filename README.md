# Minimal reproduction for [Issue 394](https://github.com/staabm/phpstan-dba/issues/394)


- Run `docker-compose up` to start a database with minimal schema.
  - See `docker/db/schema.sql` 
  - Update `docker-compose.yml` if you want to use another port for the database
- Run `composer install` with a local php installed on your machine.
  - I guess you can use PHP inside Docker if you don't have a local PHP.
- Run `php index.php` to check if everything works.
- Run `php vendor/bin/phpstan`
  - You should see this error 
```
 ------ --------------------------------------------------------------------------------------------------------------------------------------------- 
  Line   Foo.php                                                                                                                                      
 ------ --------------------------------------------------------------------------------------------------------------------------------------------- 
  44     Method Noemi\BugRepo\Foo::fetch2() should return array{id: int, name: string, request2: string} but returns non-empty-array<string, mixed>.  
 ------ --------------------------------------------------------------------------------------------------------------------------------------------- 
```
- You can uncomment `\PHPStan\dumpType($data)` inside `src/Foo.php` and run PHPStan again
```
------ --------------------------------------------------------------------------------------------------------------------------------------------- 
  Line   Foo.php                                                                                                                                      
 ------ --------------------------------------------------------------------------------------------------------------------------------------------- 
  27     Dumped type: array{id: int, name: string, request1: string}                                                                                  
  42     Dumped type: non-empty-array<string, mixed>                                                                                                  
  44     Method Noemi\BugRepo\Foo::fetch2() should return array{id: int, name: string, request2: string} but returns non-empty-array<string, mixed>.  
 ------ --------------------------------------------------------------------------------------------------------------------------------------------- 
```
- You can switch between `ReplayAndRecordingQueryReflector` and `RecordingQueryReflector` in `phpstan/phpstan-dba-boostrap.php`
  - It works with `RecordingQueryReflector`
  - It fails with `ReplayAndRecordingQueryReflector`
- You can check the cache generated in `cache/.phpstan-dba.cache.php`
  - You can compare it to my cache for exemple, in `cache-exemples`
    - `wrong.cache.php` is generated with `ReplayAndRecordingQueryReflector`
    - `good.cache.php` is generated with `RecordingQueryReflector`
