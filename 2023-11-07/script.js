

// class Person {
//       constructor(name, place) {
//             this.setPersonalDetails(name, place);
//       }

//       getPersonalDetails() {
//             return (this.name + " " + this.place);
//       }

//       setPersonalDetails(name, place) {
//             this.name = name;
//             this.place = place;
//       }
// }

// function display() {
//       const P1 = new Person("Advith", "Bengaluru");
//       const P2 = new Person("Arnav", "Mumbai");
//       document.getElementById("demo").innerHTML = P1.getPersonalDetails();
// }

// class Car {
//       constructor(name, company, mileage, year) {
//             this.name = name;
//             this.company = company;
//             this.mileage = mileage;
//             this.year = year;
//       }
//       getCarDetails() {
//             return (this.name + " " + this.company + " " + this.mileage + " " + this.year);
//       }
// }
// function displayFunction() {
//       const Car1 = my Car1("Polo", "Volkswagen", 20km / l, 2019);
//       const Car2 = my Car2("Celerio", "Maruthi", 15km / l, 2020);
//       document.getElementById("demo").innerHTML = Car1.getCarDetails();
// }

// class Car {
//       constructor(name, company, mileage, year) {
//             this.setCarDetails(name, company, mileage, year);
//       }

//       getCarDetails() {
//             return (this.name + " " + this.company + " " + this.mileage + " " + this.year);
//       }

//       setCarDetails(name, company, mileage, year) {
//             this.name = name;
//             this.company = company;
//             this.mileage = mileage;
//             this.year = year;
//       }
// }

// function displayFunction() {
//       const Car1 = new Car("Polo", "Volkswagen", "20kmpl", 2019);
//       const Car2 = new Car("Celerio", "Maruthi", "15kmpl", 2020);
//       document.getElementById("demo").innerHTML = Car1.getCarDetails();
//       document.getElementById("demo").innerHTML = Car2.getCarDetails();
//       Car1.
// }


// class Car {
//       constructor(brand) {
//             this.carname = brand;
//       }
//       present() {
//             return 'I have a ' + this.carname;
//       }
// }

// class Model extends Car {
//       constructor(brand, mod) {
//             super(brand);
//             this.model = mod;
//       }
//       show() {
//             return this.present() + ', it is a ' + this.model;
//       }
// }
// function displayFunction() {
//       const myCar = new Model("Ford", "Mustang");
//       document.getElementById("demo").innerHTML = myCar.show();
// }

// class Bike {
//       constructor(company) {
//             this.company = company;
//       }
//       companyDetails() {
//             return ("I have a" + " " + this.company);
//       }
// }

// class Model extends Bike {
//       constructor(company, mod) {
//             super(company);
//             this.model = mod;
//       }
//       modelDetails() {
//             return (this.companyDetails() + " " + this.model);
//       }
// }

// function displayFunction() {
//       const myBike = new Model("Yamaha", "R15");
//       document.getElementById("demo").innerHTML = myBike.modelDetails();
// }
class GrandParent {
      constructor(grandFatherName, grandMotherName) {
            this.setGrandFatherName(grandFatherName);
            this.setGrandMotherName(grandMotherName);
      }
      showGrandFatherName() {
            return (this.grandFatherName);
      }
      setGrandFatherName(name) {
            this.grandFatherName = name;
      }
      showGrandMotherName() {
            return (this.grandMotherName);
      }
      setGrandMotherName(name) {
            this.grandMotherName = name;
      }
}
class Parent extends GrandParent {
      constructor(fatherName, motherName, grandFatherName, grandMotherName) {
            super(grandFatherName, grandMotherName)
            this.setFatherName(fatherName);
            this.setMotherName(motherName);
      }
      showFatherName() {
            return (this.fatherName);
      }
      setFatherName(name) {
            this.fatherName = name;
      }
      showMotherName() {
            return (this.motherName);
      }
      setMotherName(name) {
            this.motherName = name;
      }

}

class Child extends Parent {
      constructor(name, fatherName, motherName, grandFatherName, grandMotherName) {
            super(fatherName, motherName, grandFatherName, grandMotherName)
            this.setName(name);
      }
      showName() {
            return (this.name);
      }
      setName(name) {
            this.name = name;
      }
}
function displayFunction() {
      const child = new Child("Advith", "Kishan", "Lavanya", "Ravindra", "Adithi");
      document.getElementById("demo").innerHTML = child.showGrandFatherName();
}



