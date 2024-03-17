let screen = document.getElementById('number');
button = document.querySelectorAll('button');
let screenValue = '';

for (item of button){
    item.addEventListener('click',(e)=>{
        buttonText = e.target.innerText;
        console.log('Button text is ', buttonText);
        if(buttonText == 'C'){
            screenValue = '';
            screen.value = screenValue;
        }
        else if(buttonText == '='){
            screen.value = eval(screenValue);
            screenValue = '';
        }
        else if(buttonText == 'AC'){
            screenValue = screenValue.slice(0,-1);
            screen.value = screenValue;
        }
        else{
            screenValue += buttonText;
            screen.value = screenValue;
        }
        })
    }