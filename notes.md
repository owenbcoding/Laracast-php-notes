# PHP Fundamentals — Notes

> Laracasts: "The Fundamentals" section
> Use this as a running cheat sheet. Add notes as you go.

---

## 01 — Your First PHP Tag
- PHP is embedded in HTML using `<?php ... ?>`
- Short echo tag: `<?= $var ?>` (same as `<?php echo $var ?>`)
- Every statement ends with `;`

---

## 02 — Variables
- Variables start with `$`
- PHP is loosely typed (no need to declare types)
- Common types: `string`, `int`, `float`, `bool`, `null`

---

## 03 — Conditionals and Booleans
- `if / elseif / else`
- `==` compares value only, `===` compares value **and** type (prefer `===`)
- Falsy values: `false`, `0`, `""`, `null`, `[]`

---

## 04 — Arrays
- `$arr = ['a', 'b', 'c'];`
- Zero-indexed
- `count($arr)` — length
- `foreach ($arr as $item)` — loop

---

## 05 — Associative Arrays
- `$arr = ['key' => 'value'];`
- Access: `$arr['key']`
- Loop: `foreach ($arr as $key => $value)`

---

## 06 — Functions and Filters
- `function name($param) { return ...; }`
- `array_filter($arr, fn)` — keep elements where callback returns true
- `array_map($arr, fn)` — transform each element

---

## 07 — Lambda Functions
- Anonymous function: `$fn = function($x) { return $x * 2; };`
- Arrow function (PHP 7.4+): `$fn = fn($x) => $x * 2;`
- Arrow functions capture outer scope automatically

---

## 08 — Separate Logic From the Template
- Do all PHP logic at the top of the file **before** HTML
- Use `<?= $var ?>` in templates to keep them clean
- Alternative `foreach` syntax in templates: `foreach (): ... endforeach;`

---

## Gotchas / Things to Remember
- 

---

## Useful Built-in Functions
| Function | What it does |
|---|---|
| `var_dump($x)` | Print value with type info (great for debugging) |
| `count($arr)` | Length of an array |
| `array_filter()` | Filter array by condition |
| `array_map()` | Transform array elements |
| `in_array($val, $arr)` | Check if value exists in array |
| `implode(', ', $arr)` | Join array into a string |
| `explode(',', $str)` | Split string into array |
