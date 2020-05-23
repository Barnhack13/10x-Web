$(document).ready(function() {
    
    jQuery.fn.extend({
        resaltar: function(busqueda, claseCSSbusqueda){
            var regex = new RegExp("(<[^>]*>)|("+ busqueda.replace(/([-.*+?^${}()|[\]\/\\])/g,"\\$1") +')', 'ig');
            var nuevoHtml=this.html(this.html().replace(regex, function(a, b, c){
                return (a.charAt(0) == "<") ? a : "<span class=\""+ claseCSSbusqueda +"\">" + c + "</span>";
            }));
            return nuevoHtml;
        }
    });



    document.getElementById('btn_search').onclick= function resaltarTexto(){
        $("#text").resaltar(textbox.value, "resaltarTexto");
    };
    
});
