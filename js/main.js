(function($){
var xajax_affiche_modules = null;

    // Hide sideBar on Desktop

    if (window.innerWidth  > 768) {
        $('body').addClass('mini-navbar')
    } else {
        $('body').removeClass('mini-navbar')
    }

    $(window).on("resize", function () {
        if (window.innerWidth  > 768) {
            $('body').addClass('mini-navbar')
        } else {
            $('body').removeClass('mini-navbar')
        }
    });

    // Add Sticky Mode

    var header = $('.navbar-static-top');
    var sticky = header.offset();

    $(window).scroll(function(){
        if (window.pageYOffset > sticky.top) {
            header.addClass('sticky');
            $('body').addClass('navbar-sticky');
        } else {
            header.removeClass('sticky');
            $('body').removeClass('navbar-sticky');
        }
    });


    // Demo

   
    // Ajax request (demo)

    var ajaxRequestHtml = function(content) {
        page = content;
		$.ajax({ url: "html/"+content+'.html?'+ Date.now(), dataType: 'html', 
			success: function(response) {

				$('#features').html(response);

                $('.img-wrapper').removeClass('duotone');
                $('.img-wrapper img').addClass('hidden');
                $('.'+page+'-background').removeClass('hidden');
                
                if( page=="parcours" || page=="atelier-1" || page=="bien-commencer" ) {
                    $('.img-wrapper').addClass('duotone');
                }

				sessionStorage.setItem('content', content);
				document.title = "Ingeneria 5.0 | "+ content;

                if(content !== 'login') {
                    $('body').removeClass('nav-hidden');
                } else {
                    $('body').addClass('nav-hidden');
                }
                
                // reInit

                $('nav a, button').not('.navbar-minimalize').off();
                navAjax();
                
                console.log('ajax done ' + content);

                $('a[data-action]').on('click',function(e){
                    e.preventDefault();
                    $("#pdfViewer").removeClass('hidden');
                    $('html, body').animate({
                        scrollTop: $("#pdfViewer").offset().top
                    }, 900);

                });

                $('#nav-tab .nav-item').on('click',function(e){
                    $("#pdfViewer").addClass('hidden');
                });
                $('.btn.action').on('click',function(e){
                    e.preventDefault();
                    if($(this).data('action')=='restart') {
                        $('html, body').animate({
                            scrollTop: $("#classRoom").offset().top - 260
                        }, 900);
                    }
                    
                    if($(this).data('action')=='expand') {
                        $(this).find('i').toggleClass('fa-expand').toggleClass('fa-remove');
                        $('#features').toggleClass('container');
                    }
                 
                    
                
                });
                

			},
			error: function() {
				ajaxRequestHtml('404');
				$('a, button').not('.navbar-minimalize').off();
				sessionStorage.removeItem('home');
			}
		});
	}
   
    navAjax = function() {
        $('nav a, button').on('click',function(e){
            e.preventDefault(); 
            if($(this).closest('li').length) {
                $('nav li').not($(this).closest('li')).removeClass('active');
                $(this).closest('li').addClass('active');
                if($("body.mini-navbar").length){
                $("body").removeClass("mini-navbar");
                SmoothlyMenu();}
            }
            
            if( $(this).data('content') ) {
                $(window).scrollTop(0);
                ajaxRequestHtml($(this).data('content'));
                // navAjax();
            }

			if($(this).attr('href')=="_#")
			e.preventDefault(); 
        });
    }

    navAjax();

	// Default content
    ajaxRequestHtml('mon-espace');

    // $('.nav-header').on('click',function(){
    //     $('.img-wrapper').toggleClass('duotone');
    // });

    // Demo countDown (init in html part)
    // http://www.finalclap.com/faq/194-javascript-compte-rebours-countdown-html

    countdownManager = {
        // Configuration
        targetTime: new Date('2023-11-05 00:00:00'), // Date cible du compte à rebours (00:00:00)
        displayElement: { // Elements HTML où sont affichés les informations
            day:  null,
            hour: null,
            min:  null,
            sec:  null
        },
         
        // Initialisation du compte à rebours (à appeler 1 fois au chargement de la page)
        init: function(){
            // Récupération des références vers les éléments pour l'affichage
            // La référence n'est récupérée qu'une seule fois à l'initialisation pour optimiser les performances
            this.displayElement.day  = jQuery('#countdown_day');
            this.displayElement.hour = jQuery('#countdown_hour');
            this.displayElement.min  = jQuery('#countdown_min');
            this.displayElement.sec  = jQuery('#countdown_sec');
             
            // Lancement du compte à rebours
            this.tick(); // Premier tick tout de suite
            window.setInterval("countdownManager.tick();", 1000); // Ticks suivant, répété toutes les secondes (1000 ms)
        },
         
        // Met à jour le compte à rebours (tic d'horloge)
        tick: function(){
            // Instant présent
            var timeNow  = new Date();
             
            // On s'assure que le temps restant ne soit jamais négatif (ce qui est le cas dans le futur de targetTime)
            if( timeNow > this.targetTime ){
                timeNow = this.targetTime;
            }
             
            // Calcul du temps restant
            var diff = this.dateDiff(timeNow, this.targetTime);
             
            this.displayElement.day.text(  diff.day  );
            this.displayElement.hour.text( diff.hour );
            this.displayElement.min.text(  diff.min  );
            this.displayElement.sec.text(  diff.sec  );
        },
         
        // Calcul la différence entre 2 dates, en jour/heure/minute/seconde
        dateDiff: function(date1, date2){
            var diff = {}                           // Initialisation du retour
            var tmp = date2 - date1;
     
            tmp = Math.floor(tmp/1000);             // Nombre de secondes entre les 2 dates
            diff.sec = tmp % 60;                    // Extraction du nombre de secondes
            tmp = Math.floor((tmp-diff.sec)/60);    // Nombre de minutes (partie entière)
            diff.min = tmp % 60;                    // Extraction du nombre de minutes
            tmp = Math.floor((tmp-diff.min)/60);    // Nombre d'heures (entières)
            diff.hour = tmp % 24;                   // Extraction du nombre d'heures
            tmp = Math.floor((tmp-diff.hour)/24);   // Nombre de jours restants
            diff.day = tmp;
     
            return diff;
        }
    };
    

})(jQuery);