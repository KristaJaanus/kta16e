 window.onload =function (){
        (function(){
        var date = new Date();
        //paneme aja õigel kujul kokku
        var time = date.getHours() + ':' 
        + date.getMinutes()+ ':'
        + (date.getSeconds()<10?'0':'') + date.getSeconds();
        //otsime lehelt esimese div tag'i
        document.getElementsByTagName('div')
        [1].innerHTML = "Aeg JS'is: " + time;
        window.setTimeout(arguments.callee,1000);
        })();
        
    }