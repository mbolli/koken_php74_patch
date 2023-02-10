# koken_php74_patch

After my hoster upgraded PHP to version 7 and MySQL to 8?, Koken was not happy.

This should help. No guarantees though, the goal was to make it run.

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
- ~~Fix code style with PHP-CS-Fixer. See `.php_cs`, I used `php-cs-fixer fix . --ansi --allow-risky=yes -v --config=./.php_cs`~~

## SQL changes

In my case there were the following SQL changes needed:

```mysql
ALTER TABLE `content` CHANGE `modified_on` `modified_on` INT(10) NULL;
ALTER TABLE `albums` CHANGE `created_on` `created_on` INT(10) NULL, CHANGE `modified_on` `modified_on` INT(10) NULL;
ALTER TABLE `users` CHANGE `created_on` `created_on` INT(10) NULL, CHANGE `modified_on` `modified_on` INT(10) NULL;
ALTER TABLE `drafts` CHANGE `created_on` `created_on` INT(10) NULL, CHANGE `modified_on` `modified_on` INT(10) NULL;
ALTER TABLE `applications` CHANGE `created_on` `created_on` INT(11) NULL;
ALTER TABLE `content` CHANGE `uploaded_on` `uploaded_on` INT(10) NULL, CHANGE `captured_on` `captured_on` INT(10) NULL;
ALTER TABLE `history` CHANGE `created_on` `created_on` INT(10) NULL;
ALTER TABLE `tags` CHANGE `created_on` `created_on` INT(10) NULL, CHANGE `modified_on` `modified_on` INT(10) NULL;
ALTER TABLE `text` CHANGE `created_on` `created_on` INT(10) NULL, CHANGE `modified_on` `modified_on` INT(10) NULL;
ALTER TABLE `trash` CHANGE `created_on` `created_on` INT(10) NULL;
```
