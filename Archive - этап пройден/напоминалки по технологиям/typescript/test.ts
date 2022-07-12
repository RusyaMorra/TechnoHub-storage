// тут используються дженерик типы, tuple-картежи, type, enum, guard, interface - ||

interface World{
    isSomeoneLives: boolean;
    ageOfExistence: number ; // так обозначаетсья примитивный тип цело численное число в строгой типизации
    ageOfExistenceExactNumFloat?: number;// так обозначаетсья примитивный число c плавающей точкой в строгой типизации, мягкий знак типо не обязательное поле
    nameOfCastle: string ; // так обозначаетсья примитивный строка в строгой типизации
    IdsOfTowers: number[]; // так обозначаетсья массив чисел в строгой типизации
    IdsOfHills: Array<number>; // дженерик тип
    PopularPhrasesInTheCastle: string[]; // так обозначаетсья массив строк в строгой типизации
    AddressForEnvelope : [string, number]; // так обозначаетсья массив tuple - кортеж тут смешанные типы
    nameOfCasle: any; // в тип any можно ложить все что угодно
    GreetingOfCastle: string;  

  

    startCastleActions():void

    greeting(greeting:string, ageOfExistence:number, nameOfCastle:string): void


}




class GamePlace implements World{

    public isSomeoneLives: boolean = true; // так обозначаетсья примитивный тип булен в строгой типизации
    public  ageOfExistence: number ; // так обозначаетсья примитивный тип цело численное число в строгой типизации
    public ageOfExistenceExactNumFloat: number = 100003000.345; // так обозначаетсья примитивный число c плавающей точкой в строгой типизации
    public  nameOfCastle: string ; // так обозначаетсья примитивный строка в строгой типизации
    public IdsOfTowers: number[] = [1,2,3,4,5,6,7,8,9,10]; // так обозначаетсья массив чисел в строгой типизации
    public IdsOfHills: Array<number> = [1,2,3,4,5,6,7,8,9,10]; // дженерик тип
    public PopularPhrasesInTheCastle: string[] = ['hello', 'hi mate']; // так обозначаетсья массив строк в строгой типизации
    public AddressForEnvelope : [string, number] = ['Форност', 343434322344]; // так обозначаетсья массив tuple - кортеж тут смешанные типы
    public nameOfCasle: any = ['Форност']; // в тип any можно ложить все что угодно
    public  GreetingOfCastle: string; 
  


    

    constructor(greeting:string, ageOfExistence:number, nameOfCastle:string){
        this.GreetingOfCastle = greeting;
        this.ageOfExistence = ageOfExistence;
        this.nameOfCastle = nameOfCastle;


        
    }

    public startCastleActions():void{
        this.greeting(this.GreetingOfCastle, this.ageOfExistence, this.nameOfCastle);
    }


    public greeting(greeting:string, ageOfExistence:number, nameOfCastle:string): void{ // void говорит о том что функция не чего не возвращает
        console.log(greeting + ' '+ nameOfCastle + '.' + 'мы существуем около:' + ' ' + ageOfExistence )
    }

    private throwError(error:string): never{  // когда нет ожидаемого завершение ставиться :never, так же как и с вечным циклом
        throw new Error(error);

    }

    private typesPeapleOfCastle():void{
        type peaple = number|string|boolean|Array<number>|Array<string>|null|undefined;

        const peappleOfCastle: peaple = 5000;
        const king: peaple = 'jon';
        const IsSecurity: peaple = true;
        const IdsOfSecurity: peaple = [1,2,3,4,5,6,7,8,9,10];
        const NamesOfSecurity: peaple = ['jo','jon','greek','jag','fast'];


    }







   
    
    
        
    

}



const gameplace = new GamePlace('Приветствуем в нашем замке', 100003000, 'Форност' );

gameplace.startCastleActions();






interface Styles{
    [key:string]:string
}

const css: Styles = {
    border:' 1px  solid black',
    marginTop: '2px',
    borderRadius: '5px'

}


enum worlds{
    wood,
    morder,
    blueWood
}

const Wood = worlds.wood;
const index = worlds[2];


enum castlePlaces{
    first = 'entrance',
    second = 'entrance2',
    third = 'entrance3',
}






function returnNum(num:number,num2:number):number{
    return num + num2
}

returnNum(1,4)









interface position {
    x: number|undefined;
    y: number|undefined;
}

function sumNum(num?:number,num2?:number):position

function sumNum(num?:number,num2?:number):position {
    return {x:undefined, y: 13}
}



class y {
    header =1
}

class x {
    header =1
}

function handle(res: y| x){
    if(res instanceof y){
        return 1;
    }else{
        return 2;
    }
}
handle(new y)






const arrayOfnum: Array<number> = [1,2,3,4,5];
const arrayOfstrings: Array<string> = ['se','re','rgd','5'];


function rev <T>(array: T[]): T[]{
    return array
}

rev(arrayOfnum)