
function loadData() {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                  document.getElementById("demo").innerHTML = this.responseText;
            } else if (this.readyState == 4 && this.status == 404) {
                  document.getElementById("demo").innerHTML = "file not found";
            }
      }
      // var xhttp;
      xhttp.open("GET", "https://mocki.io/v1/a9d5a4c4-e487-4837-a870-c085e417b10a", true);
      xhttp.send();
}

function getNumbers() {
      var a = [10, 50, 40, 20, 80, 15, 3, 8, 7, 9, 5];
      // var x = a.sort(function (a, b) { return a - b });
      // console.log(x);
      // for (let i = 0; i < 5; i++) {
      //       console.log(x[i]);
      // }

      var x = a.sort(function (a, b) { return b - a });
      console.log(x);
      for (let i = 0; i < 5; i++) {
            console.log(x[i]);
      }
}


// const fruits = ["Banana", "Orange", "Lemon", "Apple", "Mango"];
// const citrus = fruits.slice(1, 3);
// document.getElementById("demo").innerHTML = fruits + "<br><br>" + citrus;

