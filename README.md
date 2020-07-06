# Helpers
This package contains all helpful methods to help on texts, arrays, objects and number.

# Table of contents
 - [Installation](#installation)
 - [Text helper](#text-helper)
   - [Available methods](#text-helper-available-methods)
 - [Array helper](#array-helper)
   - [Available methods](#array-helper-available-methods)
 - [Object helper](#object-helper)
   - [Available methods](#object-helper-available-methods)


# Installation
To install this package, require it via the composer.  
``` 
composer require hgh/helpers
``` 

# Text Helper
The text helper is a helper that changes on texts.
## Text Helper available methods 

|Method|Method Type|Description|Sample|
|---|---|---|---|
|toSnakeCase|static|This method will convert any text to snake case.|camelCase to camel_case|
|snakeToCamel|static|This method will convert any text from snake case to camel case.|snake_case to camelCase|
|snakeToPascal|static|This method will convert any text from snake case to pascal case.|snake_case to PascalCase|
|className|static|Will extract the class name from a namespace|\HGh\Test\ClassName to ClassName|
|remove|static|Search a text in another text and remove it|`This is a test`, search for test, result `This is a `| 
|removeSpaces|static|Remove spaces from a sting|`This is a test`, result `Thisisatest`| 
|replace|static|Search a text in another text and replace it|`This is a test`, replace `test` with `text`, result `This is a text`| 
|utf8|static|Convert a text to utf8|-| 
|removeNonUtf8|static|Remove non UTF8 characters from a string|-| 
|removeNonAlphanumeric|static|Remove all nonAlphanumeric characters from a string|`$%asdds565` to `asdds565`| 
|lowercase|static|Convert a string to lowe case|`AbsasdADK` to `absasdadk`| 
|uppercase|static|Convert a string to upper case|`AbsasdADK` to `ABSASDADK`| 
|price|static|Convert a number to two decimal after point|`2` to `2.00`| 

# Array Helper
The text helper is a helper that changes on arrays.
## Array Helper available methods

|Method|Method Type|Description|Sample|
|---|---|---|---|
|snakeIndexes|static|Make all indexes of array snake_case. It can be recursive or not.|```["camelCase" => true]``` to ```["camel_case" => true]```|
|changeIndex|static|Change an index to another one.|```["oldIndex" => true]``` to ```["newIndex" => true]```|

# Object Helper
The text helper is a helper that changes on objects.
## Object Helper available methods

|Method|Method Type|Description|Sample|
|---|---|---|---|
|snakeKeys|static|Make all keys of object snake_case. It can be recursive or not.|```$stdClass->camelCase = true;``` to ```$stdClass->camel_case = true```|
|changeKey|static|Change a key to another one.|```$stdClass->old_key = true;``` to ```$stdClass->new_key = true```|