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

Create a new dto caster file at **app/Services/DTO/Casters** directory:

    php artisan create:caster <filename>

Create a new dto command file at **app/Services/DTO/Commands** directory:

    php artisan create:command <filename>

Create a new services handler file at **app/Services/Handlers** directory:

    php artisan create:handler <filename>
