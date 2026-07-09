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

## 09 — Page Links
- Build a simple navigation array once and render links from it
- Avoid hardcoding repeated `<a>` tags on every page
- Keep shared nav data in one place when possible

---

## 10 — PHP Partials
- Partials are reusable template fragments (for example: nav, footer)
- Use `require`/`include` to compose pages from smaller view files
- Shared layout pieces should live in dedicated partial files

---

## 11 — Superglobals and Current Page Styling
- Superglobals like `$_SERVER` are always available
- `$_SERVER['REQUEST_URI']` helps detect the current page
- Conditionally add an `active` class for current-nav highlighting

---

## 12 — Make a PHP Router
- Route by reading the request path and mapping it to a file
- Keep route matching logic centralized
- Return a simple 404 response for unknown routes

---

## 13 — Create a MySQL Database
- Define a schema first (tables, columns, constraints)
- Choose proper types and keys early to avoid painful migrations
- Verify inserts/selects manually before app integration

---

## 14 — PDO First Steps
- Use PDO to connect to MySQL from PHP
- Set `PDO::ATTR_ERRMODE` to `PDO::ERRMODE_EXCEPTION`
- Use prepared statements instead of manual string interpolation

---

## 15 — Extract a PHP Database Class
- Wrap raw PDO usage in a small database class
- Keep query logic in one place to reduce duplication
- Return plain arrays first; add richer abstractions later

---

## 16 — Environments and Configuration Flexibility
- Keep credentials in environment/config files, not inline in code
- Load configuration once and inject where needed
- Separate local/dev/prod values cleanly

---

## 17 — SQL Injection Vulnerabilities and Prepared Statements
- SQL injection happens when user input is concatenated into queries
- Parameter binding protects query structure from malicious input
- Validate inputs and always prefer prepared statements

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
