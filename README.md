# php-simple-training-01
Simple php training app

## Getting started

1. Clone this repository.
2. Open repository with your favorite IDE.
3. Install dependencies.
4. See a Task section.

## Testing

Test script will skip tests methods annotaed with @group notImplementedYetTest.

```bash 
composer test
```

## Task - Polish version

Twoim celem jest zaliczenie wszystkich testów jednostkowych (również tych oznaczonych anotacją notImplementedYetTest).   
Aby to osiągnąć należy zaimplementować dwie klasy:

- PT01\Operations\Multiplication
- PT01\Exceptions\InvalidComponentsShapeException (dodatkowe)

**Pamiętaj o**:
- solid
- testowaniu
- composer
- objaśniaj co robisz

#### Zadanie dodatkowe:
Dodatkowo należy zaimplementować test, który będzie weryfikował czy klasa *Multiplication* rzuca wyjątek *InvalidComponentsShapeException* gdy czynniki mnożenia mają niewłaściwe wymiary. 

Algorytm mnożenia jest opisany tutaj - ["obliczanie z definicji"](https://pl.wikipedia.org/wiki/Mno%C5%BCenie_macierzy#Obliczanie_z_definicji).




