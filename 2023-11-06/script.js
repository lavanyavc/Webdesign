// class emp {
//       constructor(name, age) {
//             this.name = name;
//             this.age = age;
//       }
// }
// const emp1 = new emp("Anil", 25);
// document.write(emp1.name);
// document.write(":");
// document.write(emp1.age);

// let person {
//       first_name = "Adithi";
//        last_name = "Tripati";

// getFunction: function()) {
//       return (person.first_name + person.last_name);
// }
// }
// document.write(person.getFunction());

class vehicle {
      constructor(name, maker, engine) {
            this.name = name;
            this.maker = maker;
            this.engine = engine;
      }
      getDetails() {
            return (`This name of bike is ${this.name}.`)
      }
}
let bike1 = new vehicle('R15', 'Yamaha', '1450cc');
let bike2 = new vehicle('Ninja', 'Kawasaki', '998cc');

document.getElementById("demo").innerHTML = bike1.name;
document.getElementById("demo").innerHTML = bike2.maker;

