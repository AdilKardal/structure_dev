let euro = document.querySelector("#euro");
let franc = document.querySelector("#franc")

euro.addEventListener("input", function(e){
     franc.value = parseFloat((e.target.value)*1.06).toFixed(2);
});

franc.addEventListener("input", function(e){
    euro.value = parseFloat((e.target.value)/1.06).toFixed(2);
});

