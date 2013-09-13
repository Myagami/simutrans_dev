function click_call(){
    alert("test") ;
}

function load_tools(tool){
    var b_url = document.getElementsByTagName("base")[0].href ;
    document.getElementById("works").src=b_url+"Pr_Portal/"+tool ;
    //alert(b_url) ;
}