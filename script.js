function m(){
   var fname= document.getElementById("f");
    var lname= document.getElementById("l");
    var email= document.getElementById("e");
    var pass= document.getElementById("p");
    var mobile= document.getElementById("m");
    var city= document.getElementById("c");
    
    var gender;
    if(document.getElementById("male").checked){
        gender = document.getElementById("male");
    }else if(document.getElementById("female").checked){
        gender = document.getElementById("female");
    }

    var f =  new FormData();
   f.append("f",fname.value);
   f.append("l",lname.value);
   f.append("e",email.value);
   f.append("p",pass.value);
   f.append("m",mobile.value);
   f.append("c",city.value);
   f.append("g",gender.value);





    var r = new XMLHttpRequest();
    r.onreadystatechange = function(){
        if(r.readyState == 4 ){
           var t = r.responseText;
           alert(t);
        }
    };
    r.open("POST","register.php",true);
    r.send(f);
    

    


}