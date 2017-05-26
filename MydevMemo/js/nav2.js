var navElt = document.getElementById("navigation");
var entete1 = document.getElementById("entete1");
var cElt = document.getElementById("c");
cElt.style.cursor = "pointer";
var QtElt = document.getElementById("Qt");
QtElt.style.cursor = "pointer";
var javElt = document.getElementById("javascript");
javElt.style.cursor = "pointer";
var htmlElt = document.getElementById("html");
htmlElt.style.cursor = "pointer";
var cssElt = document.getElementById("css");
cssElt.style.cursor = "pointer";
var phpElt = document.getElementById("phpMySql");
phpElt.style.cursor = "pointer";


function inputLink(list){
    ajaxGet("../js/data/"+list+".json", function(reponse){
        var listJson = JSON.parse(reponse);
        
            
        listJson.forEach(function(link){
            navElt.style.border = link.border;
            var displayedLink = "<a id=\""+link.id+"\" class=\"cat\" href=\""+link.url+"\">"+link.title+"</a>";
            navElt.insertAdjacentHTML("afterBegin", displayedLink);
            });
    })
}


function displayLink(e){
        navElt.innerHTML = "";
        var classElt  = document.getElementsByClassName("cat");
        var maxClassElt = classElt.length;
        for(var i=1;i<=maxClassElt;i++){
            navElt.removeChild(document.getElementById(i));        
        }
        inputLink(e.target.id);
        //entete1.style.height = "150px";
        //display = true;
    }

cElt.addEventListener("click", displayLink);
QtElt.addEventListener("click", displayLink);
htmlElt.addEventListener("click", displayLink);
cssElt.addEventListener("click", displayLink);
javElt.addEventListener("click", displayLink);
phpElt.addEventListener("click", displayLink);