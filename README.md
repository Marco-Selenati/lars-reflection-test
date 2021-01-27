# Lars reflection test

I got asked how to get the type of a parameter with reflection with PHP.

The expected output is:

```pwsh
lars-reflection-test> php .\index.php
int(1)
string(3) "int"
```

**_Warning_**

This does not support PHP 8 union types
https://www.php.net/manual/en/class.reflectionuniontype.php
