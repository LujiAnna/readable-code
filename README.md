# Code Refactoring

This code prints all pizza orders bills. It has the below features

## Features

- Display all orders
- Create order
- Name Display
- Address display
- Bill calculation and display.
- Tracks order completion.

## Steps

- [x] Understand the given code
- [x] Write a good README.md
- [x] Follow Code Principles: Function, Function names, write [TODOS](https://dev.to/razbakov/todo-in-code-b) or issues, Testing & Commiting
- [x] Use PHP code standards like [PSR12](https://www.php-fig.org/psr/psr-12/)
- [x] Read article on how to write a [clean code](https://dev.to/gonedark/writing-clean-codes) and use [Code Guides](https://basecodefieldguide.com/)
- [x] Code sniffer (Do not use this now). This can auto-fix your code or give hints on how to fit it yourself. Install php-code-sniffer extension for VSCode in the end.

## Instructions

- Use one file
- Discuss solution in group (2)
- Tips to share

## Tips : General & Syntax

### Functions

- Identify entry point
- Change file name to main functionality (order)
- Avoid usage of mixed _, small, capital letter at same time. As `_` is mostly used with PHP functions, avoid it in naming your functions
- Identify what all functions do, and change their names to their main tasks
- Every function should aim to focus on one thing
- Return early where you can

### Variables

- Identify variables, variable names, parameters and arguments
- Write clear variable and function names (be explicit!)
- Naming: fix typos, use Caps Locks where needed eg in people's names, address names
- Avoid useless variables

### [Basic Code Standards](https://www.php-fig.org/psr/psr-1/)

- Method names MUST be declared in camelCase()
- Class constants MUST be declared in all upper case with underscore separators
- naming convention is used SHOULD be applied consistently within a reasonable scope
- Code MUST use an indent of 4 spaces for each indent level, and MUST NOT use tabs for indenting.

### Clean Code

- Remove unnecessary spacing, comments, functions, variable
- Remove unused code (if commented, add why if possible)
- Initialize with empty: string, array, or 0 for numbers.
- IF: Omit else in an if if possible. Change if to switch if applicable.

### Syntax

- Use camel case for variables and functions
- Watch where the curly bracket should go
- Use whitespace wisely
- Adhere to PSR12

### Geneal

- Leverage errors to your advantage (create a custom one for unwanted situations)
- Avoid nesting if unneeded
- Test after every refactor / change
-
