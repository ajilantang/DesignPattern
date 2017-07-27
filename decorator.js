class Coffee{
    price() {
        return 0
    } 
}

class orginal extends Coffee {
    price() {
        return 5000
    } 
}

class VietnamDrip {
    constructor(Coffee) {
        this.coffee = Coffee;
    }

    price() {
        return this.coffee.price() + 20000;
    }
}

class ExtraSugar {
    constructor(Coffee) {
        this.coffee = Coffee;
    }

    price() {
        return this.Coffee.price() + 1000;
    }
}

const order = new ExtraSugar(new VietnamDrip(new orginal()));
console.log(order.price());

