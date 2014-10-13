String.prototype.strip = function(char) {
    return this.replace(new RegExp("^" + char + "*"), '').
        replace(new RegExp(char + "*$"), '');
}


$.extend_if_has = function(desc, source, array) {
    for (var i=array.length;i--;) {
        if (typeof source[array[i]] != 'undefined') {
            desc[array[i]] = source[array[i]];
        }
    }
    return desc;
};


(function($) {
    $.fn.tilda = function(eval, options) {
        if ($('body').data('tilda')) {
            return $('body').data('tilda').terminal;
        }
        this.addClass('tilda');
        options = options || {};
        eval = eval || function(command, term) {
            term.echo("you don't set eval for tilda");
        };
        var settings = {
            prompt: '--> ',
            name: 'tilda',
            height: 100,
            enabled: false,
            greetings:  '*************BandwidthBoys v0.01 MAIN CONSOLE**************',
            keypress: function(e) {
                if (e.which == 96) {
                    return false;
                }
            }
        };
        if (options) {
            $.extend(settings, options);
        }
        this.append('<div class="td"></div>');
        var self = this;
        self.terminal = this.find('.td').terminal(eval, settings);
        var focus = false;
        var snowing=false;
        $(document.documentElement).keypress(function(e) {
        	

            if (e.which == 96) {
                self.slideToggle('fast');
                self.terminal.focus(focus = !focus);
                self.terminal.attr({
                    scrollTop: self.terminal.attr("scrollHeight")
                });
            }
        });
        $('body').data('tilda', this);
        this.hide();
        return self;
    };
})(jQuery);

//--------------------------------------------------------------------------
jQuery(document).ready(function($) {
	/*

		Ideas: 
			-rotate like jung magoni
			-oraDOMi
			-jquery autocomplete
			-http://lazylinepainter.info/
			-notifications http://hakanersu.github.io/AmaranJS/
			-Multiplane css http://codepen.io/nickpettit/pen/eBCrK
			-3d hover effect http://thecodeplayer.com/walkthrough/3d-thumbnail-image-hover-effect
			-hexaflip http://oxism.com/hexaflip/
			-rainydai.js
			-hover intent for some easter egg or show console
			-different cursors for users




	*/


    $('#tilda').tilda(function(command, terminal) {
        if(command =='help'){
            terminal.echo("list of commands: snow, snow console, matrix, and clear");
        }
        //todo: change prompt if they type falco or fleece
        else if(command =='fleece' || command =='FLEECE'){
            terminal.echo(  '*********************************************************************\n' +
                            '*                                                                   *\n' +
                            '*               FFFF  LL     EEEE   EEEE   CCCC   EEEE              *\n' +
                            '*               FF    LL     EEE    EEE    CC     EEE               *\n' +
                            '*               FF    LLLL   EEEE   EEEE   CCCC   EEEE              *\n' +
                            '*                                                                   *\n' +
                            '*********************************************************************');
        	terminal.set_prompt('fleece>');
        }
        else if(command =='falco' || command =='FALCO'){
            terminal.echo(  '*********************************************************************\n' +
                            '*                                                                   *\n' +
                            '*    FFFF  A     LL    CCCC   OOOO     H  H  EEEE  RRR     EEEE     *\n' +
                            '*    FF   AAA    LL    CC     O  O     HHHH  EEE   R  R    EEE      *\n' +
                            '*    FF  A   A   LLLL  CCCC   OOOO     H  H  EEEE  R  RR   EEEE     *\n' +
                            '*                                                                   *\n' +
                            '*********************************************************************');
            terminal.set_prompt('falco>');
        	$(document.body).css('cursor','url(smiley.gif),url(myBall.cur),auto');
        }
        else if(command =='CROCK' || command =='crock'){
            terminal.echo(  '*********************************************************************\n' +
                            '*                                                                   *\n' +
                            '*               CCCC  RRR    OOOO    CCCC   KK KK                   *\n' +
                            '*               CC    R R    O  O    CC     KKK                     *\n' +
                            '*               CCCC  R RR   OOOO    CCCC   KK KK                   *\n' +
                            '*                                                                   *\n' +
                            '*********************************************************************');
            $(document.body).css('cursor','no-drop');
            terminal.set_prompt('crock>');
        }
        else if(command =='megan' || command =='MEGAN'){

            terminal.echo(  'ily bb\n'+
            				' -fleece');
            terminal.set_prompt('megan>');
        }
        else if(command =='bb' || command =='BB'){
            terminal.echo(  'megan \n');
        }
        else if(command =='falco here' || command =='Falco here' || command =='Falco Here' || command =='falco Here'|| command =='falcohere'){
            terminal.echo("I'm fine");
        }
        //snow
        else if(command=='snow'){
            snowFall.snow(document.body);
        }
         //snow console
        else if(command=='snow console'){
            //snowFall.snow('#tilda');
			snowFall.snow(document.getElementById('tilda'));
			      
		}
		else if(command=='clear'){
			$('#tilda').snowfall('clear');
			terminal.clear();     
		}
        //matrix
        else if(command=='matrix'){
            matrix();
        }
        else
        {
            terminal.echo('you typed: "' + command + '"');
        }
    });
});
