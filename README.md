Uri Value Object Benchmarks
===========================

[![Build Status](https://travis-ci.org/phpbench/uri-benchmarks.svg?branch=master)](https://travis-ci.org/phpbench/uri-benchmarks)

Benchmarking suite for instantiating URI Value Objects.

Results
-------

(50 iterations / 1000 revolutions)

```
$ phpbench/bin/phpbench run benchmarks --iterations=50 --revs=1000 --store --report=uri_aggregate

Suite #133a1961af0b5e067a1e0158e255c479eff9628b 2016-09-18 20:06:41
+--------------+---------+------------------------------------+
| provider     | key     | value                              |
+--------------+---------+------------------------------------+
| uname        | os      | Linux                              |
| uname        | host    | dtlt410                            |
| uname        | release | 4.2.0-1-amd64                      |
| uname        | version | #1 SMP Debian 4.2.6-1 (2015-11-10) |
| uname        | machine | x86_64                             |
| php          | version | 7.0.8-5                            |
| php          | xdebug  | 1                                  |
| unix-sysload | l1      | 0.23                               |
| unix-sysload | l5      | 0.25                               |
| unix-sysload | l15     | 0.27                               |
| baseline     | nothing | 0.056982040405273                  |
| baseline     | md5     | 0.76603889465332                   |
| baseline     | file_rw | 2.11501121521                      |
+--------------+---------+------------------------------------+

suite: 133a1961af0b5e067a1e0158e255c479eff9628b, date: 2016-09-18, stime: 20:06:41
+------------------------+----------+-----------+----------+-----------+-----------+------------+
| Subject                | VDB      | Aura      | NetUrl   | ZendUri   | League    | Windwalker |
+------------------------+----------+-----------+----------+-----------+-----------+------------+
| benchCreateValueObject | 81.118μs | 101.164μs | 14.763μs | 127.479μs | 389.343μs | 45.853μs   |
+------------------------+----------+-----------+----------+-----------+-----------+------------+

subject: benchCreateValueObject
+--------------------+------------+-----------+-----------+-----------+-----------+--------+--------+
| benchmark          | mem_peak   | best      | mean      | mode      | worst     | rstdev | diff   |
+--------------------+------------+-----------+-----------+-----------+-----------+--------+--------+
| VdbUriBench        | 983,928b   | 49.570μs  | 72.747μs  | 81.118μs  | 91.227μs  | 17.25% | 4.44x  |
| AuraUriBench       | 2,777,328b | 65.707μs  | 93.543μs  | 101.164μs | 106.607μs | 13.83% | 5.71x  |
| NetUrl2Bench       | 994,960b   | 14.053μs  | 16.396μs  | 14.763μs  | 28.007μs  | 22.80% | 1.00x  |
| ZendUriBench       | 1,157,192b | 85.975μs  | 116.361μs | 127.479μs | 167.861μs | 16.35% | 7.10x  |
| LeagueUriBench     | 1,396,104b | 347.908μs | 385.521μs | 389.343μs | 557.542μs | 8.59%  | 23.51x |
| WindwalkerUriBench | 889,944b   | 25.643μs  | 39.416μs  | 45.853μs  | 48.241μs  | 20.51% | 2.40x  |
+--------------------+------------+-----------+-----------+-----------+-----------+--------+--------+
```
