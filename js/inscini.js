'use strict';
document.addEventListener("DOMContentLoaded", initinscripcion());
const titulo=300;
const cedula=480;
const certfirma=465;
const certfirmapers=590;
const persjur = 390;
const condicionamiento = 190;


const cotizacion = new Vue({
    el:'#totalcotizacion',
    data:{
        arancel: 0,
        titulo:300,
        cedula:480,
        certfirma:0,
        persjur:0,
        arancelprenda:0,
        condicionamiento:0,
        total:0,
        visible:false,
    },
    methods:{

    },

});


function initinscripcion(){
    let calcular= document.querySelector("#calcular");
    let prenda= document.querySelector('#prenda');
    let tieneprenda= document.querySelector('#prendasi');
    let facpesos= document.querySelector('#factpesos');
    let facdolar= document.querySelector('#factdolares');
    let calcfactdolar= document.querySelector('#facturaendolares');
    let montofac=document.querySelector('#montofact');
    let divisa= document.querySelector('#divisafactura') ;
    let dolarenprenda= document.querySelector('#cotdolarenprenda');
    let prendadolar= document.querySelector('#divisaprenda');
    calcfactdolar.setAttribute('hidden',true);
    tieneprenda.setAttribute('hidden',true);
    dolarenprenda.setAttribute('hidden',true);
    document.querySelector('#textcotdolarprenda').setAttribute('hidden',true);


    prenda.addEventListener('change', function(e){
        e.preventDefault();
        if(prenda.checked===false){
            tieneprenda.setAttribute('hidden',true);           
        }else{
            tieneprenda.removeAttribute('hidden');
           
        }
    });
    prendadolar.addEventListener('change',function(e){
        console.log(prendadolar.value);
        if (prendadolar.value=='Dolares'){
           dolarenprenda.removeAttribute('hidden');
           document.querySelector('#textcotdolarprenda').removeAttribute('hidden');

        }else{
            dolarenprenda.setAttribute('hidden',true);
            document.querySelector('#textcotdolarprenda').setAttribute('hidden',true);

        }
    });
    facdolar.addEventListener('click', function(e){
        calcfactdolar.removeAttribute('hidden');

    });
    facpesos.addEventListener('click', function(e){
        calcfactdolar.setAttribute('hidden',true);
        
    });

    calcular.addEventListener('click', function(e){
        e.preventDefault();
        document.querySelector('#templatecotizacion').setAttribute('hidden',true);
        calculararancel(facdolar, montofac.value,divisa.value)  
        if (prenda.checked) {
            calculararancelprenda()
        }
        calculararancelVarios();
        calcularTotal();
       /*  let imprime = document.querySelector('#imprimir');
        imprime.addEventListener('click',function(e){
            e.preventDefault() ;
            let ficha = document.querySelector('#imprimirdetalle');
            imprimirdetal(ficha);
        }); */
    });


    
}




function calculararancelprenda(){
    let divisaenprenda=document.querySelector('#divisaprenda');
    let cotdolarenprenda=document.querySelector("#cotdolarenprenda");
    let montoprenda=document.querySelector('#montoprenda');
    let totprenda=0;
    if (divisaenprenda.value=='Dolares'){
        totprenda = montoprenda.value * cotdolarenprenda.value;
    }else{
        totprenda=montoprenda.value;
    }
    if (prenda.checked==true){        
        totprenda=(totprenda * 1.5) / 1000;
        totprenda = parseFloat(totprenda.toFixed(2));
        if(totprenda<500){
            totprenda=500;
        }
        cotizacion.arancelprenda=totprenda;
        if (document.querySelector('#prendacondicionada').checked){
            cotizacion.condicionamiento=condicionamiento;
        }
    }
}
function calculararancel(dolares,monto,divisa){
    let nacional=document.querySelector('#nacimp');
    let arancel=0;
    if(dolares.checked){
        monto=monto*divisa;  
        console.log(monto);      
    }
    if(nacional.value==='Nacional'){
        arancel=monto * 2.5 / 1000;
        if(arancel<16750){
            arancel=16750;
        }
    }else{
        arancel=monto * 5 / 1000;
        if(arancel<22085){
            arancel=22085;
        }
    }
    cotizacion.arancel= parseFloat(arancel.toFixed(2));
    cotizacion.visible=true;

}
function calculararancelVarios(){
    if (document.querySelector("#certfirma").checked==true){
        cotizacion.certfirma=certfirma;
    }
    if (document.querySelector("#persjur").checked==true){
        cotizacion.persjur=persjur;
        cotizacion.certfirma=certfirmapers;
    }
}
function calcularTotal(){
    let total=0;
    total=cotizacion.arancel+cotizacion.titulo+cotizacion.cedula+cotizacion.certfirma+cotizacion.persjur+cotizacion.arancelprenda+cotizacion.condicionamiento;
    cotizacion.total=total;
}


function imprimirdetal(ficha) {
    console.log(ficha);
    let ventimp = window.open(' ', 'popimpr');
    ventimp.document.write('<html><head><title></title>');
    ventimp.document.write('<link rel="stylesheet" href="style.css">');
    ventimp.document.write('</head><body >');

    ventimp.document.write('<table>'+ficha.innerHTML+'</table>');
    ventimp.document.write('</body></html>');

    ventimp.document.close();
    ventimp.print();
    ventimp.close();
}
