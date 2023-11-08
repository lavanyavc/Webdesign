// class Person {
//       constructor(name, phone) {
//             this.name = name;
//             this.mobile_no = phone
//       }

//       getPersonDetails() {
//             console.log("name", this.name, "\n mobile:", this.mobile_no);
//       }
// }

// class Employee extends Person {
//       constructor(n, m, s, c) {
//             super(name, c);
//             this.salary = s;
//             this.company = c;
//       }
//       getOfficeDetails() {
//             console.log("salary", this.salary, "\n mobile:", this.company);
//       }
// }
// p1 = new Person("Kavitha", 7894125472);
// p2 = new Person("Pooja", 9876542120);

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

class Car {
      constructor(name, company, mileage, year) {
            this.setCarDetails(name, company, mileage, year);
      }

      getCarDetails() {
            return (this.name + " " + this.company + " " + this.mileage + " " + this.year);
      }

      setCarDetails(name, company, mileage, year) {
            this.name = name;
            this.company = company;
            this.mileage = mileage;
            this.year = year;
      }
}

function displayFunction() {
      const Car1 = new Car("Polo", "Volkswagen", "20kmpl", 2019);
      const Car2 = new Car("Celerio", "Maruthi", "15kmpl", 2020);
      document.getElementById("demo").innerHTML = Car1.getCarDetails();
      document.getElementById("demo").innerHTML = Car2.getCarDetails();
      Car1.
}
