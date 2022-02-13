# Spatie DTO Console Commands

This package is a simple way to generate Command files, Caster files and Handler files by console commands for Spatie DTO.

Requires:
- PHP 8+
- Laravel 8.0+
- Spatie DTO 3+

## Installation

Run this command from your Laravel application folder:

    composer require nikrovir/spatie-dto-commands

## Usage

Create a new dto caster file at **app/Services/DTO/Caster** directory:

    php artisan services:caster <filename>

Create a new dto command file at **app/Services/DTO/Command** directory:

    php artisan services:command <filename>

Create a new services handler file at **app/Services/Handler** directory:

    php artisan services:handler <filename>
