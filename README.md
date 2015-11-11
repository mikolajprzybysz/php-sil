# PHP Standard Interface Library

Standard Interface Library provides a set of interfaces for software developers to ensure compatibility of across various projects. Making them easily exchangeable and reducing to zero the overhead of making library compatible with projects using this standard.

# Install (include in composer)

```json
"require": {
    "mikolajprzybysz/php-sil": "^1.0.0"
}
```

# Use it to create easily pluggable project.

Create two different project, each of projects will be cache implementation using redis or memcache.

# Using interfaces in project classes to ensure pluggability of different implementations.

Create class that will be able to cache data once it recieves it from external service and use *SimpleCacheInterface*,
now you are able to use any cache implementation based on *SimpleCacheInterface*

# Milestones
| version | deadline | description |
| :------- | :--------: | ----------- |
| 1.1.0   | February 2016 | Acquire at least two implementations for `CacheInterface`, `CommandInterface`, `SemaphoreInterface`, `LogInterface`, `LogAsyncInterface` and list them in readme. |
| 1.2.0   | June 2016 | Development of four additional interfaces for existing groups and creation of two additional groups. |

# Collaboration
If you are interested in adding some interfaces, fork the repo, add your interfaces and make a pull request.
If you have created project compatible with Standard Interface Library please create issue (https://github.com/mikolajprzybysz/php-sil/issues/new) and link your repo.

