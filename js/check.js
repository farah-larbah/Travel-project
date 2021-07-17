function validateform(){ 
    var name=document.form1.name.value; 
    
    if (name == null || name == ""){ 
    alert("Name can't be blank"); 
    return false; }
       
    }
    function subjectvalidateform(){ 
        var subject=document.form1.subject.value;
        if (subject == null || subject == ""){ 
            alert("Enter the subject Please"); 
            return false; }

    }
    function textareavalidateform(){
        var mess=document.form1.mess.value; 
        if (mess == null || mess == ""){ 
            alert("textarea can't be blank"); 
            return false; } 
    }
    function numbervalidateform(){
        var number=document.form1.number.value; 
        if (number == null || number == ""){ 
            alert("Enter your phone number Please"); 
            return false; }
    }

  
    function isCheckEmail(inputValue) {
    var foundAt = false
    var foundDot = false
    var atPosition = -1
    var dotPosition = -1
    for (var i = 0; i <= inputValue.length; i++) {
    
    if (inputValue.charAt(i) == "@") {
    foundAt = true
    atPosition = i
    }
    else if (inputValue.charAt(i) == ".") {
    foundDot = true
    dotPosition = i
    }
    }
    if ((dotPosition == -1) ||(atPosition == -1) || (atPosition > dotPosition)) {
        alert("Please enter a valid e-mail address");
    return false } }

  
    

    