<script>
function tirerCarte(){
				document.getElementById('joueur1').innerHTML = '<div> Player 1 </div>' ;
				document.getElementById('joueur1').innerHTML += '<img src="{{app.request.basepath}}/image/verso.jpg" width="150" height="200" onclick="jouerCarte()"/>';
				document.getElementById('joueur1').innerHTML += '<img src="{{app.request.basepath}}/image/verso.jpg" width="150" height="200"onclick="jouerCarte()"/>';
				document.getElementById('joueur2').innerHTML = '<div> Player 2 </div>' ;
                                document.getElementById('joueur2').innerHTML += '<img src="{{app.request.basepath}}/image/verso.jpg" width="150" height="200" onclick="jouerCarte()"/>';
                                document.getElementById('joueur2').innerHTML += '<img src="{{app.request.basepath}}/image/verso.jpg" width="150" height="200" onclick="jouerCarte()" />';
			};
                        
function jouerCarte(){
				document.getElementById('joueur1').innerHTML = '<div> Player 1 </div>' ;
				document.getElementById('joueur1').innerHTML += '<img src="{{app.request.basepath}}/image/verso.jpg" width="150" height="200" onclick="jouerCarte()"/>';
				document.getElementById('joueur1_joue').innerHTML += '<img src="{{app.request.basepath}}/image/baron.jpg" width="150" height="200" />';
				document.getElementById('joueur2_joue').innerHTML += '<img src="{{app.request.basepath}}/image/baron.jpg" width="150" height="200"/>';
			};

prendre=false;
pioche=12;
i=1;
fin=false;
jouer=false;
poser=false;
gagnant=0;
int main1=[];
int main1_joue=[];
int main2=[];
int main2_joue=[];

var pioche=[];
var ide=[];

{% for item1 in piocher %}
    pioche.push("{{ item1 }}");
{% endfor %}

{% for item1 in id %}
    ide.push("{{ item1 }}");
{% endfor %}

document.getElementById('joueur1').innerHTML += '<img src="{{app.request.basepath}}/image/baron.jpg" width="150" height="200"/>';
    
document.getElementById('joueur2').innerHTML += '<img src="{{app.request.basepath}}/image/baron.jpg" width="150" height="200"/>';


function comparaison(){
if(main1[0]<main2[0]){
    gagnant=2;
}else{
if(main1[0]>main2[0]){
    gagnant=1;
}else{
    gagnant=0;
}
}

function fin(){
if(pioche==0 ){
    gagnant=comparaison();
}
if(gagnant==1){
    alert('Victoire joueur 1');
}else{
    if(gagnant==2){
        alert('Victoire joueur 2');
    }else{
    alert('Personne na gagne');
}
fin=true;
}


</script>



