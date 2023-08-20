# Comparisons

PHP adopts 1 as true, and a empty string "" as false. On this context, there are two type of equality comparisons between variables: loose and strict

```php
// Loose comparison: don't care about the type
echo 5 == "5"; // 1 (true)

// Strict comparison: does care about the type
echo 5 === "5"; // "" (false)
```

You can compare strings in PHP. These comparisons are based on ASCII code

```php
echo 'shaun' < 'yoshi'; // s = 73 < y = 79 (true)

echo 'shaun' < 'Yoshi'; // s = 73 < Y = 59 (false)

echo 'Sow' < 'Saw'; // o = 6F > a = 61 (false)
```
