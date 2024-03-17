function validateform(){
    event.preventDefault();
    const nameregex = /^[a-zA-Z\s]+$/;
    const contactregex = /^[0-9]{11}$/;
    const emailregex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const passwordregex =/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;

    nameinput = document.getElementById('name').value;
    contactinput = document.getElementById('contact').value;
    emailinput = document.getElementById('email').value;
    passwordinput = document.getElementById('password').value;
    confirmpass = document.getElementById('cpassword').value;
    dob = document.getElementById('dob').value;
    console.log(dob);

    if(!nameregex.test(nameinput)){
        alert('Name should only contain alphabets and spaces');
        return;
    }
    if(!contactregex.test(contactinput)){
        alert('Contact should only contain 11 digits');
        return;
    }
    if(!emailregex.test(emailinput)){
        alert('Email should be in the format');
        return;
    }
    if(!passwordregex.test(passwordinput)){
        alert('Password should contain at least 8 characters, one uppercase, one lowercase and one number');
        return;
    }
    if(passwordinput != confirmpass){
        alert('Passwords do not match');
        return;
    }
    if(dob){
        var dobdate = new Date(dob);
        var currentdate = new Date();

        var agediff = currentdate.getFullYear()-dobdate.getFullYear();
        if (currentdate.getMonth() < dobdate.getMonth() || (currentdate.getMonth() === dobdate.getMonth() && currentdate.getDate() < dobdate.getDate())) {
            agediff--;
        }
        if(agediff<18){
            alert('You should be 18 years old');
            return;
        }
    }
    document.querySelector('button[type="submit"]').click();

}
