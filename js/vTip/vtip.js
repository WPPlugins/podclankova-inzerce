/**
Vertigo Tip by www.vertigo-project.com
Requires jQuery
*/
var vt = jQuery.noConflict();
this.vtip = function() {    
    this.xOffset = -10; // x distance from mouse
    this.yOffset = 10; // y distance from mouse       
    
    vt(".vtip").unbind().hover(    
        function(e) {
            this.t = this.title;
            this.title = ''; 
            this.top = (e.pageY + yOffset); this.left = (e.pageX + xOffset);
            
            vt('body').append( '<p id="vtip"><img id="vtipArrow" />' + this.t + '</p>' );
            vt('p#vtip').css("top", this.top+"px").css("left", this.left+"px").fadeIn("slow");
        },
        function() {
            this.title = this.t;
            vt("p#vtip").fadeOut("slow").remove();
        }
    ).mousemove(
        function(e) {
            this.top = (e.pageY + yOffset);
            this.left = (e.pageX + xOffset);
                         
            vt("p#vtip").css("top", this.top+"px").css("left", this.left+"px");
        }
    );            
    
};

jQuery(document).ready(function($){vtip();})