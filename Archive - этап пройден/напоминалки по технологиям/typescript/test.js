var GAMEPLACE = /** @class */ (function () {
    function GAMEPLACE(greeting, ageOfExistence, nameOfCastle) {
        this.isSomeoneLives = true; // так обозначаетсья примитивный тип булен в строгой типизации
        this.ageOfExistenceExactNumFloat = 100003000.345; // так обозначаетсья примитивный число c плавающей точкой в строгой типизации
        this.IdsOfTowers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]; // так обозначаетсья массив чисел в строгой типизации
        this.IdsOfHills = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]; // дженерик тип
        this.PopularPhrasesInTheCastle = ['hello', 'hi mate']; // так обозначаетсья массив строк в строгой типизации
        this.AddressForEnvelope = ['Форност', 343434322344]; // так обозначаетсья массив tuple - кортеж тут смешанные типы
        this.nameOfCasle = ['Форност']; // в тип any можно ложить все что угодно
        this.GreetingOfCastle = greeting;
        this.ageOfExistence = ageOfExistence;
        this.nameOfCastle = nameOfCastle;
    }
    GAMEPLACE.prototype.startCasleActions = function () {
        this.greeting(this.GreetingOfCastle, this.ageOfExistence, this.nameOfCastle);
    };
    GAMEPLACE.prototype.greeting = function (greeting, ageOfExistence, nameOfCastle) {
        console.log(greeting + ' ' + nameOfCastle + 'мы существуем около:' + ' ' + ageOfExistence);
    };
    return GAMEPLACE;
}());
var gameplace = new GAMEPLACE('Приветствуем в нашем замке', 100003000, 'Форност');
gameplace.startCasleActions();
