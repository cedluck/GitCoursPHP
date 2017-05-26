var navElt = document.getElementById("navigation1");
var javElt = document.getElementById("javascript");
javElt.style.cursor = "pointer";
var htmlElt = document.getElementById("html");
htmlElt.style.cursor = "pointer";
var cssElt = document.getElementById("css");
cssElt.style.cursor = "pointer";
var phpElt = document.getElementById("phpMySql");
phpElt.style.cursor = "pointer";


var javascriptLink =[
    {
        id: "1",
        url: "enconstruction.php",
        title: "Server Web"
    },
    {
        id: "2",
        url: "enconstruction.php",
        title: "Dynamisme"
    },
    {
        id: "3",
        url: "enconstruction.php",
        title: "D.O.M"
    },
    {
        id: "4",
        url: "javascript/javascriptPoo.php",
        title: "Poo >>"
    },
    {
        id: "5",
        url: "javascript/javascriptIntro.php",
        title: "Intro >>"
    }
    
];
var htmlLink =[
    {
        id: "1",
        url: "html/htmltableform.php",
        title: "Table/Form"
    },
    {
        id: "2",
        url: "html/htmlstructure.php",
        title: "Structure"
    },
    {
        id: "3",
        url: "html/htmlbases.php",
        title: "Les bases"
    }
    
];
var cssLink =[
    {
        id: "1",
        url: "css/cssmediaqueries.php",
        title: "Media Queries"
    },
    {
        id: "2",
        url: "css/cssflexbox.php",
        title: "Flexbox"
    },
    {
        id: "3",
        url: "css/cssproprietes.php",
        title: "Feuille de style"
    }
    
];
var phpLink =[
    {
        id: "1",
        url: "php/phpregex.php",
        title: "Regex"
    },
    {
        id: "2",
        url: "php/phpsql.php",
        title: "Langage SQL"
    },
    {
        id: "3",
        url: "php/phpbdd.php",
        title: "Les BDD"
    },
    {
        id: "4",
        url: "php/phptransmission.php",
        title: "Transmission"
    },
    {
        id: "5",
        url: "php/phptabfonction.php",
        title: "Tableaux/fonctions"
    },
    {
        id: "6",
        url: "php/phpbases.php",
        title: "Les Bases"
    }
    
];


function setLink(link){
            var linkElt = "<a id=\""+link.id+"\" class=\"cat\" href=\""+link.url+"\">"+link.title+"</a>";
            return linkElt;
            }

function inputLink(list, elt){
        
        list.forEach(function(link){
            var displayedLink = setLink(link);
            elt.insertAdjacentHTML("afterEnd", displayedLink);
            });     
}

var display = true;
function displayLink(e){
     if(display){
         if(e.target.id==="javascript"){
            inputLink(javascriptLink, e.target);           
            display = false;
        }else if(e.target.id==="html"){
            inputLink(htmlLink, e.target);          
            display = false;  
        }else if(e.target.id==="css"){
            inputLink(cssLink, e.target);          
            display = false;
        }else if(e.target.id==="phpMySql"){
            inputLink(phpLink, e.target);          
            display = false;
        }
     }else{
        var classElt  = document.getElementsByClassName("cat");
        var maxClassElt = classElt.length;
        for(var i=1;i<=maxClassElt;i++){
            console.log(document.getElementById(i));
            console.log(navElt);
            navElt.removeChild(document.getElementById(i));          
            display = true;
        }
        if(e.target.id==="javascript"){
            inputLink(javascriptLink, e.target);           
            display = false;
        }else if(e.target.id==="html"){
            inputLink(htmlLink, e.target);          
            display = false;  
        }else if(e.target.id==="css"){
            inputLink(cssLink, e.target);          
            display = false;
        }else if(e.target.id==="phpMySql"){
            inputLink(phpLink, e.target);          
            display = false;
        }
    }
}

javElt.addEventListener("click", displayLink);
htmlElt.addEventListener("click", displayLink);
cssElt.addEventListener("click", displayLink);
phpElt.addEventListener("click", displayLink);