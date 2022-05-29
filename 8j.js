$(function(){
    //1 ocultar formulario
    $("#bt-oc").click(function(){
        $(".form").hide();
        $(".form2").hide();
        $(".form3").hide();
        $(".form4").hide();
    });
    //2 mostrar formulario
    $("#bt-mo").click(function(){
        $(".form").show();
        $(".form2").show();
        $(".form3").show();
        $(".form4").show();
    });
    //3 desplega una alerta de un botón su información
    $("#bt-al").click(function () { 
        alert($("#TL").html());    
    });
    //4 sustituir texto por otro
    $("#bt-su").click(function () {
        $("#in").text("¡¡TODO LO QUE TE GUSTA HACER!!");
    });
    //5 cambiar color texto click
    $("#cu").on('click', function () {
        $(this).css("color", "red");
    });
    //6 imagen al estar dentro
    $("#img").mouseenter(function () {
        $("#img").css("background-image","url(img/gracias.png");
    });
    //7 imagen fuera
    $("#img").mouseleave(function () {
        $("#img").css("background-image","url(img/gracias_a.png");
    });
    //8 Texto en las cajas
    $(function(){
        $("#cursoD").val('Ingrese sus cursos o diplomados');
        $("#Intereses").val('Ingrese lo pedido con respecto a usted ');
    });
    //9 cambiar color mientras el puntero este dentro del formulario
    $(".form").hover(function(){
        $(".form").css("background-image","linear-gradient(to top, #48c6ef 0%, #6f86d6 100%)");
    },
    function(){
        $(".form").css("background-image","linear-gradient(to top, #dfe9f3 0%, white 100%)");
    }
    );
    $(".form2").hover(function(){
        $(".form2").css("background-image","linear-gradient(to top, #48c6ef 0%, #6f86d6 100%)");
    },
    function(){
        $(".form2").css("background-image","linear-gradient(to top, #dfe9f3 0%, white 100%)");
    }
    );
    $(".form3").hover(function(){
        $(".form3").css("background-image","linear-gradient(to top, #48c6ef 0%, #6f86d6 100%)");
    },
    function(){
        $(".form3").css("background-image","linear-gradient(to top, #dfe9f3 0%, white 100%)");
    }
    );
    $(".form4").hover(function(){
        $(".form4").css("background-image","linear-gradient(to top, #48c6ef 0%, #6f86d6 100%)");
    },
    function(){
        $(".form4").css("background-image","linear-gradient(to top, #dfe9f3 0%, white 100%)");
    }
    );   
    //10 versión Jquery
    if (typeof jQuery != 'undefined') {
        alert("la version de jquery es: " + jQuery.fn.jquery);
    }
    //11 texto cambio de fuente
    $("#bt-letra").click(function () {
        $(".form").css({ "font-family": "Times New Roman" });
        $(".form2").css({ "font-family": "Times New Roman" });
        $(".form3").css({ "font-family": "Times New Roman" });
        $(".form4").css({ "font-family": "Times New Roman" });
    });
    //13 cambio de color con botón
    $("#bt-color").click(function(){
        $(".section").css({"background-image":"linear-gradient(to top, #eeaeca 0%, #94bbe9 100%)"});
        $("body").css({"background-image":"linear-gradient(to top, #eeaeca 0%, #94bbe9 100%)"});
        $(".form").css({"background-image":"linear-gradient(to top, #3f5efb 0%, #fc466b 100%)"});
        $(".form2").css({"background-image":"linear-gradient(to top, #3f5efb 0%, #fc466b 100%)"});
        $(".form3").css({"background-image":"linear-gradient(to top, #3f5efb 0%, #fc466b 100%)"});
        $(".form4").css({"background-image":"linear-gradient(to top, #3f5efb 0%, #fc466b 100%)"});
        $(".form").hover(function(){
            $(".form").css("background-image","linear-gradient(to top, #209cff 0%, #68e0cf 100%)");
        },
        function(){
            $(".form").css("background-image","linear-gradient(to top,#3f5efb 0%, #fc466b 100%)");
        }
        );
        $(".form2").hover(function(){
            $(".form2").css("background-image","linear-gradient(to top, #209cff 0%, #68e0cf 100%)");
        },
        function(){
            $(".form2").css("background-image","linear-gradient(to top,#3f5efb 0%, #fc466b 100%)");
        }
        ); 
        $(".form3").hover(function(){
            $(".form3").css("background-image","linear-gradient(to top, #209cff 0%, #68e0cf 100%)");
        },
        function(){
            $(".form3").css("background-image","linear-gradient(to top,#3f5efb 0%, #fc466b 100%)");
        }
        );
        $(".form4").hover(function(){
            $(".form4").css("background-image","linear-gradient(to top, #209cff 0%, #68e0cf 100%)");
        },
        function(){
            $(".form4").css("background-image","linear-gradient(to top,#3f5efb 0%, #fc466b 100%)");
        }
        ); 
    });
    //14 botón suavizado enviar
    $(document).ready(function () {
        $(".button").click(function (event) {
            $(".button").fadeTo("slow", 0.4);
        });
    });    
    //15 barra
    $(document).ready(function () {
        $(".fot").mouseup(function () {
            animateProgressBar($(".ddlPercent").val());
        });
        function animateProgressBar(percentComplete) {
            $(".innerDiv").animate({
                'width': (500 * percentComplete) / 100
            }, 5000);

            $({ counter: 1 }).animate({ counter: percentComplete }, {
                duration: 5000,
                step: function () {
                    $(".innerDiv").text(Math.ceil(this.counter) + ' %');
                }
            });
        }
    });
    //16 botón aparecer enviar
    $("#enviarb").hide();
    $(".checkbox").click(function(){
        $("#enviarb").toggle();
    });
    //17 selector al final
    $(document).ready(function () {
        $("p").mouseenter(function () {
            $(this).css("color", "pink");
        });
    });
    //18 instrucciones
    $(document).ready(function () {
        $(".bc").one("click", function () {
            alert("Responda el siguiente formulario de acuerdo a los especificado. Conteste honestamente");
        });
    });
    //19 cuantas veces se mueve el cursor en cada formulario
    n1=0;
    $(".form").mousemove(function(){
    n1++;
    $("#mousemove").html("mousemove: "+n1+" movimientos");
    });
    n2=0;
    $(".form2").mousemove(function(){
        n2++;
        $("#mousemove2").html("mousemove: "+n2+" movimientos");
    });
    n3=0;
    $(".form3").mousemove(function(){
        n3++;
        $("#mousemove3").html("mousemove: "+n3+" movimientos");
    });  
    n4=0; 
    $(".form4").mousemove(function(){
        n4++;
        $("#mousemove4").html("mousemove: "+n4+" movimientos");
    });
    //20 cuantas veces se mueve el cursor sobre un elemento (este caso etiquetas)
    m1 = 0;
    $(".form").mouseover(function () {
        m1++;
        $("#mouseover").html("mouseover: " + m1 + " veces");
    });
    m2 = 0;
    $(".form2").mouseover(function () {
        m2++;
        $("#mouseover2").html("mouseover: " + m2 + " veces");
    });
    m3 = 0;
    $(".form3").mouseover(function () {
        m3++;
        $("#mouseover3").html("mouseover: " + m3 + " veces");
    });
    m4 = 0;
    $(".form4").mouseover(function () {
        m4++;
        $("#mouseover4").html("mouseover: " + m4 + " veces");
    });
});
