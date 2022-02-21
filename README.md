# Spatie DTO Console Commands

This simple package is a way to generate Command files and Caster files for Spatie DTO, and service layer Handler files by console commands.

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
