# Spatie DTO Console Commands

This package is a simple way to generate Command files, Caster files and Handler files by console commands for Spatie DTO.

Requires:
- PHP 8+
- Laravel 8.0+
- Spatie DTO 3+

## Installation

Run this command from your Laravel application folder:

    composer require nikrovir/spatie-dto-commands
    
Publish BaseHandler:

    php artisan vendor:publish --tag=dto-commands

## Usage

Create caster file:

    php artisan dto:caster <filename>

Create command file:

    php artisan dto:command <filename>

Create handler file:

    php artisan dto:handler <filename>

> All commands generate files in *app/DTO* directory
