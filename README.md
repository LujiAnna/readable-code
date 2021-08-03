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
- Code sniffer (Do not use this now). This can auto-fix your code or give hints on how to fit it yourself.

## Instructions

- Use one file
- Discuss solution in group (2)
- Tips to share

## Tips Below

### Functions

- Identify entry point
- Change file name to main functionality (order)
- Avoid usage of mixed _, small, capital letter at same time. As `_` is mostly used with PHP functions, avoid it in naming your functions
- Identify what all functions do, and change their names to their main tasks

### Variables

- Identify variables, variable names, parameters and arguments
- change variable names to clearly written ones
- Naming: fix typos, use Caps Locks where needed eg in people's names, address names

### [Basic Code Standards](https://www.php-fig.org/psr/psr-1/)

- Method names MUST be declared in camelCase()
- Class constants MUST be declared in all upper case with underscore separators
- naming convention is used SHOULD be applied consistently within a reasonable scope
- Code MUST use an indent of 4 spaces for each indent level, and MUST NOT use tabs for indenting.

### Clean Code

- Remove unnecessary spacing, comments, functions, variable
- Initialize with empty: string, array, or 0 for numbers.
- Change if to switch
