function validSubmit() {
      function validName() {
            var nameError = document.getElementById("name-error");
            var name = document.getElementById("fname").value;
            if (name.length == 0) {
                  nameError.innerHTML = "*Name is required*";
                  return false;
            }
            if (!name.match(/^[A-Za-z]{4,9}$/)) {
                  nameError.innerHTML = "*Use alphabets only*";
                  return false;
            }
            // nameError.innerHTML = "valid";
      //       return true;
      // }

      // function validDate() {
      //       var dateError = document.getElementById("dob-error");
      //       var birthDate = document.getElementById("dob").value;
      //       if (dob.length == 0) {
      //             dateError.innerHTML = "*DOB is required*";
      //             return false;
            }
            if (!birthDate.match(/^[0-9]{2}[\/]{1}[0-9]{2}[\/]{1}[0-9]{4}$/g)) {
                  dateError.innerHTML = "*Use Numbers only*"
            }
            dateError.innerHTML = "Valid";
            return true;
      }
      function validEmail() {
            var emailError = document.getElementById("email-error");
            var email = document.getElementById("email").value;
            if (email.length == 0) {
                  emailError.innerHTML = "*Email is required";
                  return false;
            }
            if (!email.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
                  emailError.innerHTML = "*@ is missing";
                  return false;
            }
      }

}
