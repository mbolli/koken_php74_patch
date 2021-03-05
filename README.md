# koken_php74_patch

After my hoster upgraded PHP to version 7 and MySQL to 8?, Koken was not happy.

This should help. I probably introduced another hundred bugs or so, but the goal was to make it run.

Because of legal reasons, (Koken being bought and dumped by NetObjects, but probably still their property), I only publish a patch.

The main points are the deprecated methods and the MySQL sql modes.

## Code changes

- Temporarily remove `ONLY_FULL_GROUP_BY` from the list of sql modes before each query (this fixes 95% of the queries)
- Fix hundreds of notices
	- "Only variables should be passed by reference"
	- Optional arguments coming before mandatory ones
	- Undefined variables
	- Old-style constructors
	- Exceptions not caught
	- Deprecated methods like `ereg()`
- Fix code style with PHP-CS-Fixer. See `.php_cs`, I used `php-cs-fixer fix . --ansi --allow-risky=yes -v --config=./.php_cs`

## SQL changes

In my case there were the following SQL changes needed (without it I was not able to upload new pictures via Lightroom Plugin):

```mysql
ALTER TABLE `koken_content` CHANGE `modified_on` `modified_on` INT(10) NULL;
ALTER TABLE `koken_albums` CHANGE `created_on` `created_on` INT(10) NULL, CHANGE `modified_on` `modified_on` INT(10) NULL;
```
