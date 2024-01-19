function optionChange(){
    if(document.getElementById('kate')){
        id = document.getElementById('kate').value;

        if(id == '0'){
            document.getElementById('Box1').style.display = "";
            document.getElementById('Box2').style.display = "none";
            document.getElementById('Box3').style.display = "none";

        }else if(id == '1'){
            document.getElementById('Box1').style.display = "none";
            document.getElementById('Box2').style.display = "flex";
            document.getElementById('Box3').style.display = "none";
            document.getElementById('rydan').style.display = "none";
        }
        else if(id == '2'){
            document.getElementById('Box1').style.display = "none";
            document.getElementById('Box2').style.display = "none";
            document.getElementById('Box3').style.display = "flex";
            document.getElementById('rydan').style.display = "none";
        }
    }

window.onload = optionChange;
}