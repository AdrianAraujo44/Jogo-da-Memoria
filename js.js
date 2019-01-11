var imagem=[0,0,1,1,2,2,3,3,4,4,5,5] ;       
var valores = [];
var id = [];
var quadradoVirado = 0;
var ponto=0;
Array.prototype.quadrado = function(){
    var i = this.length, j, temp;
    while(--i > 0){
        j = Math.floor(Math.random() * (i+1));
        temp = this[j];
        this[j] = this[i];
        this[i] = temp;
       
    }
}
function newcard(){
	quadradoVirado = 0;
	var output = '';
    imagem.quadrado();
	for(var i = 0; i < imagem.length; i++){
		output += '<div id="quadrado'+i+'" onclick="vira(this,\''+imagem[i]+'\')"></div>';
	}
	document.getElementById('memory_board').innerHTML = output;
}
function vira(quadrado,val){
    if(valores.length<2){
     //quadrado.style.background="url('img/'"+val+"'.jpg')";
        
     quadrado.style.background='url(imagem/'+val+'.jpg)';
	 
     //quadrado.innerHTML=val+".jpg";
    if(valores.length==0){
        valores.push(val);
        id.push(quadrado.id);
       }else if(valores.length == 1){
			valores.push(val);
			id.push(quadrado.id);
           if(valores[0] == valores[1]){
				quadradoVirado += 2;
               
               var quadrado1 = document.getElementById(id[0]);
               var quadrado2 = document.getElementById(id[1]);
               var bpontos = document.getElementById('bpontos');
				valores = [];
            	id= [];
                ponto+=10;
               /*placar.innerHTML=ponto;*/
               bpontos.value=ponto;
              
           if(bpontos.value>=100){
                bpontos.style.marginLeft="115px";
                bpontos.style.width="165px";
             }else{
                 bpontos.style.marginLeft="130px";
             }
           }
           /*if(ponto>0){
           alert(ponto);
           }*/
           if(quadradoVirado ==imagem.length){
					
					newcard();
				}else {
				function flip2Back(){
				   
				    var quadrado_1 = document.getElementById(id[0]);
				    var quadrado_2 = document.getElementById(id[1]);
				    quadrado_1.style.background='#a74040';
				    quadrado_2.style.background = '#a74040';
            	   
				    valores = [];
            	    id = [];
				}
				setTimeout(flip2Back, 700);
			}
          }
       }
	}
        /*relogio*/
var g_iCount = new Number();
var g_iCount = 60;
var min=1;

function startCountdown(){
    if(min>=0 && g_iCount>=0){
               numberCountdown.innerText ="0"+min+"." + g_iCount;
               setTimeout('startCountdown()',1000);
               g_iCount=g_iCount-1;
               if(g_iCount==0){
               		min=min-1;
                  g_iCount=60; 	
               }
}else{
    alert("fim do jogo");
    newcard();
    g_iCount = 60;
    min=1;
    startCountdown();
   ponto=0;
    bpontos.value=ponto;
   /*placar.innerHTML=ponto;*/
  /* placar.style.marginLeft="-13px";*/
}
    
}
function cadastrar(){
     setTimeout("window.location='login.php'", 1000);
}
function cadastrarErro(){
     setTimeout("window.location='CadastroUsuarios.php'", 1000);
}
