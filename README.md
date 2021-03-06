# PHPStan carbon bug

Repository to demonstrate bug in PHPStan with nesbot/carbon library.

## How to replicate the bug

Class using Carbon:
```shell
time vendor/bin/phpstan analyse --debug src/ClassUsingCarbon.php
```
Result is extremely slow:
```
16.83s user
0.09s system
99% cpu
16.950 total
```

-----

Class using Carbon (simple example):
```shell
time vendor/bin/phpstan analyse --debug src/ClassUsingCarbonSimple.php
```
Result is extremely slow:
```
10.42s user
0.12s system
98% cpu
10.692 total
```

-----

Compared to class using DateTimeImmutable:
```shell
time vendor/bin/phpstan analyse --debug src/ClassUsingDateTime.php
```
```
0.37s user
0.07s system
83% cpu
0.518 total
```
