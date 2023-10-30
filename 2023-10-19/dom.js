
//how to target Dom Objects//

// /*var element;
// element = document.images;
// console.log(element);



// target Objects //

// var element;

// element = document.getElementById("header");

// console.log(element);

// var element;
// element = document.getElementById("menu");
// console.log(element);



// var element;

// element = document.getElementsByClassName("list")[1].innerText;

// console.log(element);

// var element;
// element = document.getElementsByClassName("list")[0];
// console.log(element);

// var element;

// element = document.getElementsByTagName("p");

// console.log(element);

// var element;
// element = document.getElementsByTagName("h3");
// console.log(element);


//get with Dom//

// var element;

// element = document.getElementById("sidebar").innerText;

// console.log(element);



// var element;

// element = document.getElementById("sidebar").innerHTML;

// console.log(element);


//  var element;
//  element = document.getElementById("header").getAttribute("style");
//  console.log(element);

// var element;
// element = document.getElementById("menu").getAttribute("style");
// console.log(element);


// var element;

// element = document.getElementById("header").attributes;

// console.log(element)


//set with Dom methods//

// var element;

// element = document.getElementById("content").innerHTML = "Content";

// console.log(element);

//query selector//


// var element;
// element = document.querySelector("#header").innerHTML;
// console.log(element);

// var element;
// element = document.querySelector(".list").innerHTML;
// console.log(element);

// var element;
// element = document.querySelector("#sidebar").innerText;
// console.log(element);

// var element;
// var list;
// element = document.getElementById("sidebar");
// list = element.querySelectorAll("a");

// for (let i=0; i<list.length; i++) {
//    list[i].style.color="red";
// }


document.querySelector("h1").style.textAlign="Left";
document.querySelector("h2").style.color="blue";















































 //onclick event//
document.getElementById("header").onClick = abc;

function abc(){
   document.getElementById("header").style.background = "green";
}


// onmouseenter event//


//document.getElementById("header").onmouseenter = abc;
//
// with addEventListener

 //document.getElementById("header")./*r("mouseenter",abc);
  // document.getElementById("header").addEventListener("click", function(){
      // document.getElementById("header").style.border = "20px solid red"; 
  // });  

/* document.getElementById("header").addEventListener("click", abc);
   document.getElementById("header").addEventListener("click", function() {
      this.style.border = "10px solid red";
   });  */

// with removeEventListener

//document.getElementById("header").removeEventListener('mouseleave',abc);

//document.getElementById("header").addEventListener("click",xyz);


//function xyz() {
   // document.getElementById("header").removeEventListener('mouseleave',abc);
//}









