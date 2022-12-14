(function ($) {
  
  // Config

  var defaultContent = "enneagramme";
  var historyBack = false;

  // Flip cart

  var preventScroll = function (el) {
    $("html, body").animate({
        scrollTop: $(el).offset().top + -60,
      },0
    );
  };

  // Cards

  var cardFamily = function () {
    $(document).ready(function () {

      $cardFamily = $("#cardFamily");

      // Card inner
      $cardFamilyCarousel = $(".card-slick-carousel");

      $cardFamilyCarousel
        .slick({
          dots: true,
          arrows: false,
        })
        .on("afterChange", function (event, slick, currentSlide) {
          nSlickItems =
            $(this).find(".slick-slide").not(".slick-cloned").length - 1;
          if (currentSlide == nSlickItems) {
            $(this).closest(".item-card-family").addClass("has-been-read");
            // Unlock
            $(".item-card-family").removeClass('lock');
          }
        });
      /*
      
      $(".btn-slick-goto").on("click", function () {
        var goTo =
          -1 + slickTestContainer.slick("slickCurrentSlide") * -1;
        history.go(goTo);
      });
      */

      $(".item-card-family .recto").on("click", function (e) {
        e.preventDefault();
        $(this).addClass("hidden");
        $(this)
          .closest(".item-card-family")
          .find(".verso")
          .removeClass("hidden")
          .addClass("flipInY animated");

        $cardFamilyCarousel.slick("unslick");

        $cardFamilyCarousel.slick({
          dots: true,
          arrows: false,
        });
      });
      
      $(".item-card-family .verso .btn-undo").on("click", function (e) {
        e.preventDefault();
        $(this).closest(".item-card-family").find(".verso").addClass("hidden");
        $(this)
          .closest(".item-card-family")
          .find(".recto")
          .removeClass("hidden")
          .addClass("flipInYx animated");
      });

      $(".item-card-family .verso .btn-next").on("click", function(e){
        e.preventDefault();
        console.log('slick btn');
        $currentCarousel = $(this).closest(".card-slick-carousel");
        $currentCarousel.slick("slickNext");
      });


    });


  };

  // Enneagramme Test

  var enneaTest = function () {

    var displayResult = function() {
      $('.enneagramme-step-1').addClass('hidden');
        dataIndex = $slickEnneagramme.find('.slick-active').data('slick-index');
        var arrDisplay = $('.item-card-family-'+dataIndex).data('display');
        $('.item-card-family-'+dataIndex).parent('div').removeClass('hidden');
        $('.item-card-family-ibox').parent('div').removeClass('hidden');
        $('.item-enneagramme-type').addClass('hidden');
        $.each(arrDisplay,function(index,item) {
          $('.item-enneagramme-type-'+dataIndex).removeClass('hidden');
          $('.item-card-family-'+item).addClass('lock').parent('div').removeClass('hidden');
        });
    }

    $(document).ready(function () {
      $slickEnneagramme = $(".slick-enneagramme");
      $slickEnneagramme
        .slick({
          dots: false,
          arrows: false,
          draggable: false,
          infinite: false,
          accessibility: false,
          swipe: false,
        })
        .on("afterChange", function (event, slick, currentSlide, nextSlide) {
          if(currentSlide==0){
            $(".btn-set-enneagramme").find(".btn-start").removeClass("hidden");
            $(".btn-set-enneagramme").find(".btn-valid").addClass("hidden");
            $(".btn-set-enneagramme").find(".btn-prev").addClass("hidden");
            $(".btn-set-enneagramme").find(".btn-next").not('.btn-start').addClass("hidden");
          } else {
            $(".btn-set-enneagramme").find(".btn-start").addClass("hidden");
            $(".btn-set-enneagramme").find(".btn-valid").removeClass("hidden");
            $(".btn-set-enneagramme").find(".btn-prev").removeClass("hidden");
            $(".btn-set-enneagramme").find(".btn-next").not('.btn-start').removeClass("hidden");
          }
          $(".btn-pagination-enneagramme").find(".btn").removeClass("btn-primary");
          $('.btn-pagination-enneagramme').find("li:eq("+currentSlide+")").find('.btn').addClass("btn-primary");
        });

      $(".btn-set-enneagramme")
        .find(".btn-next")
        .on("click", function (e) {
          e.preventDefault();
          $slickEnneagramme.slick("slickNext");
        });

      $(".btn-set-enneagramme")
        .find(".btn-prev")
        .on("click", function (e) {
          e.preventDefault();
          $slickEnneagramme.slick("slickPrev");
        });

      // Step 1

      // Valid with modal
      $(".btn-set-enneagramme")
      .find(".btn-valid.modal")
      .on("click", function (e) {
        e.preventDefault();
        dataIndex = $slickEnneagramme.find('.slick-active').data('slick-index');
        $('.item-enneagramme-type').addClass('hidden');
        $('.item-enneagramme-type-'+dataIndex).removeClass('hidden');
      });
       // Valid without modal
      $(".btn-set-enneagramme").find('.btn-valid').not('.btn-modal').on('click',function(e){
        e.preventDefault();
        displayResult();
      });

      $(".btn-pagination-enneagramme")
        .find(".btn-slick-goto")
        .on("click", function (e) {
          e.preventDefault();
          slickIndex = $(this).data("slick-index");
          $slickEnneagramme.slick("slickGoTo",slickIndex);
        });
        
      $("#choiceEnneaModal").find('.btn-restart').on('click',function(e){
        e.preventDefault();
        $("#choiceEnneaModal").modal('hide');
        $slickEnneagramme.slick("slickGoTo", 0);
      });
      
      $("#choiceEnneaModal").find('.btn-valid').on('click',function(e){
        e.preventDefault();
        $("#choiceEnneaModal").modal('hide');
        displayResult();
      });

    });
  };

  // Init

  activeEl = $("nav.navbar-default").find(
    "a[data-content=" + defaultContent + "]"
  );
  activeEl.closest("li").addClass("active");

  // Hide sideBar on Desktop

  if (window.innerWidth > 768) {
    $("body").addClass("mini-navbar");
  } else {
    $("body").removeClass("mini-navbar");
  }

  $(window).on("resize", function () {
    if (window.innerWidth > 768) {
      $("body").addClass("mini-navbar");
    } else {
      $("body").removeClass("mini-navbar");
    }
  });

  // Add Sticky Mode

  if ($(".navbar-static-top").length) {
    var header = $(".navbar-static-top");
    var sticky = header.offset();

    $(window).scroll(function () {
      if (window.pageYOffset > sticky.top) {
        header.addClass("sticky");
        $("body").addClass("navbar-sticky");
      } else {
        header.removeClass("sticky");
        $("body").removeClass("navbar-sticky");
      }
    });
  }

  // SwipeLeft (mobile)

  closeSideBar = function () {
    $("body").toggleClass("mini-navbar");
    SmoothlyMenu();
  };
  $(".navbar-default").on("swipeleft", closeSideBar);

  // toTop

  $(window).scroll(function () {
    if ($(this).scrollTop()) {
      $("#toTop").fadeIn();
    } else {
      $("#toTop").fadeOut();
    }
  });

  $("#toTop").click(function () {
    //1 second of animation time
    //html works for FFX but not Chrome
    //body works for Chrome but not FFX
    //This strange selector seems to work universally
    $("html, body").animate({ scrollTop: 0 }, 1000);
  });

  // Modal

  $("a.modal").on("click", function (e) {
    e.preventDefault();
    $($(this).attr("href")).modal("show");
  });

  // Demo

  // Ajax request (demo)

  var ajaxRequestHtml = function (content) {

    var params = "null";
    var request = content;
    if(Array.isArray(content)) {
      content = request.shift();
      params = request;
    }

    $.ajax({
      url: "html/" + content + ".php?" + Date.now(),
      data:{params},
      dataType: "html",
      success: function (response) {

        new cardFamily();

        new enneaTest();

        // Restart pace loader spinner

        Pace.restart();

        // Respons HTML

        $("#features").html(response);

        // Progress Circle

        if ($(".progress-ing5").length) {
          $(".progress-ing5").circleProgress({
            max: 100,
            value: 75,
            textFormat: "value",
            startAngle: -90,
            animationDuration: 1500,
          });
        }

        // Imgage Background

        $(".img-wrapper").attr("class", "img-wrapper");
        $(".img-wrapper img").addClass("hidden");
        if ($("#features > .row").first().data("background")) {
          bgEl = $("#features > .row").first().data("background");
          // Data jSon
          $(".img-wrapper").addClass(bgEl.effect);
          $(".img-wrapper img." + bgEl.name).removeClass("hidden");
        } else {
          $(".img-wrapper img.default").removeClass("hidden");
        }

        // add Class page content

        $("body[class*='page']").removeClass(function (index, css) {
          return (css.match(/(^|\s)page\S+/g) || []).join(" ");
        });

        $("body").addClass("page-" + content);

        if (historyBack == true) {
          // sessionStorage.setItem("content", content);

          // var pathname = window.location.pathname; // Returns path only (/path/example.html)
          // var url = window.location.href; // Returns full URL (https://example.com/path/example.html)
          // var origin = window.location.origin; // Returns base URL (https://example.com)
          // Current URL: https://my-website.com/page_a
          const nextURL = window.location.origin + "/index.html#" + content;
          const nextTitle = content;
          const nextState = {
            additionalInformation: "Updated the URL with JS",
          };

          // This will create a new entry in the browser's history, without reloading
          window.history.pushState(nextState, nextTitle, nextURL);

          // This will replace the current entry in the browser's history, without reloading
          window.history.replaceState(nextState, nextTitle, nextURL);
        } else {
          $("#prevBox").addClass("hidden");
        }

        // reInit

        navAjax(content);

        console.log("ajax done " + content);

        // Slick - Test "SoftSkills"

        // Container
        slickTestContainer = $(".slick-soft-skills");

        if (slickTestContainer.length) {
          // Init
          slickTestContainer
            .slick({
              dots: false,
              arrows: false,
              draggable: false,
              infinite: false,
              swipe: false,
              focusOnChange: true,
            })
            .init(function (event, slick) {
              // $(".progress-ing5").circleProgress({
              //   max: 100,
              //   value: 0,
              //   textFormat: "value",
              //   startAngle: -90,
              //   animationDuration: 1500,
              // });

              // Debug
              // slickTestContainer.slick("slickGoTo",47);
              // Unset function xajax_ for the demo
              xajax_valide_test = function () {
                return;
              };
              xajax_ajoute_reponse = function () {
                return;
              };

              // Btn PrevBox prevent history

              $("#btnPrevBox").on("click", function () {
                var goTo =
                  -1 + slickTestContainer.slick("slickCurrentSlide") * -1;
                history.go(goTo);
              });

              // Init Count
              testIni = "_1";
              countArray = $("#title-test" + testIni).data("count");
              $(".count").text(countArray[1]);
              $(".total").text(countArray[2]);

              // Button "R??ponse"

              $(this)
                .find("button.btn")
                .not(".btn-prev")
                .on("click", function (e) {
                  e.preventDefault();
                  $(this)
                    .closest(".row")
                    .find("button")
                    .removeClass("btn-primary valid");
                  $(this).addClass("btn-primary valid");

                  // Circle Progress
                  nBtnTest =
                    $(".slick-box-test .row .btn-outline-secondary").not(
                      ".btn-restart"
                    ).length / 4;
                  nBtnTestValid = $(
                    ".slick-box-test .row .btn-outline-secondary.valid"
                  ).length;
                  // 4 col
                  // circleProgressVal = (nBtnTestValid / nBtnTest) * 100;
                  barProgressVal = (nBtnTestValid / nBtnTest) * 100;

                  setTimeout(function () {
                    // $(".progress-ing5").circleProgress({
                    //   value: circleProgressVal,
                    // });
                    $(".progress-bar").css("width", barProgressVal + "%");
                    slickTestContainer.slick("slickNext");
                    // Add to count
                    if (
                      parseInt($(".count").text()) <
                      parseInt($(".total").text())
                    )
                      $(".count").text(parseInt($(".count").text()) + 1);
                  }, 300);
                });

              // Pagination

              // Button "a", continue or restart

              $(this)
                .find(".btn")
                .on("click", function (e) {
                  e.preventDefault();

                  if ($(this).hasClass("btn-restart")) {
                    e.preventDefault();
                    // Back to start (section)
                    var currentSlide =
                      slickTestContainer.slick("slickCurrentSlide");
                    countTestArray = $(".title-test.active").data("count");
                    slickTestContainer.slick(
                      "slickGoTo",
                      currentSlide + 1 - countTestArray[2]
                    );

                    // Reset count (section)
                    $(".count").text(1);

                    // Reset active (section)
                    slickTestContainer
                      .find(".row.slick-slide")
                      .each(function (i, e) {
                        if (
                          $(this).data("slick-index") >
                            currentSlide - countTestArray[2] &&
                          $(this).data("slick-index") < currentSlide
                        ) {
                          $(this)
                            .find("button")
                            .removeClass("btn-primary valid");
                        }
                      });

                    // New Circle Progress (after reset section)
                    // nBtnTest = ($('.slick-box-test .row .btn-outline-secondary').not('.btn-restart').length)/4;
                    nBtnTestValid = $(
                      ".slick-box-test .row .btn-outline-secondary.valid"
                    ).length;
                    // 4 col
                    // newCircleProgressVal = (nBtnTestValid / nBtnTest) * 100;
                    // $(".progress-ing5").circleProgress({
                    //   value: newCircleProgressVal,
                    // });
                    newbarProgressVal = (nBtnTestValid / nBtnTest) * 100;
                    $(".progress-bar").css("width", newbarProgressVal + "%");
                  }

                  if ($(this).hasClass("btn-prev")) {
                    e.preventDefault();
                    slickTestContainer.slick("slickPrev");

                    currentSlide =
                      slickTestContainer.slick("slickCurrentSlide");

                    newCount = parseInt($(".count").text()) - 1;

                    if (newCount >= 1) {
                      $(".count").text(newCount);
                    }
                    if (newCount == 0 && currentSlide > 0) {
                      countTestArray = $(".title-test.active").data("count");

                      idTest = countTestArray[0] - 1;
                      $(".title-test").addClass("hidden").removeClass("active");
                      $("#title-test_" + idTest)
                        .removeClass("hidden")
                        .addClass("active");

                      newCountArray = $("#title-test_" + idTest).data("count");
                      $(".count").text(newCountArray[2]);
                      $(".total").text(newCountArray[2]);
                    }
                  }

                  if ($(this).hasClass("btn-next")) {
                    e.preventDefault();
                    slickTestContainer.slick("slickNext");
                  }

                  if ($(this).hasClass("btn-success")) {
                    e.preventDefault();
                    idTest = $(this).data("valid");

                    $(".title-test").addClass("hidden").removeClass("active");

                    $("#title-test_" + (idTest + 1))
                      .removeClass("hidden")
                      .addClass("active");

                    newCountArray = $(".title-test.active").data("count");

                    $(".count").text(newCountArray[1]);
                    $(".total").text(newCountArray[2]);
                  }

                  $("html, body").animate(
                    {
                      scrollTop: $(".stats").offset().top + -60,
                    },
                    0
                  );
                });
            });
        }
        // End Slick

        // Pdf demo

        $("a[data-action]").on("click", function (e) {
          e.preventDefault();
          $("#pdfViewer").removeClass("hidden");
          $("html, body").animate(
            {
              scrollTop: $("#pdfViewer").offset().top,
            },
            900
          );
        });

        $("#nav-tab .nav-item").on("click", function (e) {
          $("#pdfViewer").addClass("hidden");
        });
        $(".btn.action").on("click", function (e) {
          e.preventDefault();
          if ($(this).data("action") == "restart") {
            $("html, body").animate(
              {
                scrollTop: $("#classRoom").offset().top - 260,
              },
              900
            );
          }

          $("#features").addClass("container");

          if ($(this).data("action") == "expand") {
            $(this)
              .find("i")
              .toggleClass("fa-expand")
              .toggleClass("fa-compress");
            // Toggle Modal
            if ($("#classRoom").hasClass("modal")) {
              $("#classRoom").removeClass("modal").modal("hide").show();
            } else {
              $("#classRoom").addClass("modal").modal("show");
            }
          }
        });
      },
      error: function () {
        ajaxRequestHtml("404");
        // sessionStorage.removeItem("home");
      },
    });
  };

  // History back

  window.addEventListener(
    "hashchange",
    () => {
      console.log("The hash has changed!");
      if (window.location.hash) {
        newContent = window.location.hash.substring(1);
        ajaxRequestHtml(newContent);
      }
    },
    false
  );

  navAjax = function (content) {
    // Reinit on click with "off"
    $("nav a, button")
      .not(".navbar-minimalize")
      .not($('a[href="_#"]'))
      .not(".modal")
      .off();

    $("a, button")
      .not(".modal")
      .on("click", function (e) {
        // Stop propagation

        if (!$(this).data("content")) {
          e.preventDefault();
        }
        // Not parent submenu
        if (!$(this).find(".fa.arrow").length) {
          e.preventDefault();
          if ($(this).closest("li").length && $(this).closest("nav").length ) {
            $("nav li").not($(this).closest("li")).removeClass("active");
            $(this).closest("li").addClass("active");
            if ($("body.mini-navbar").length) {
              $("body").removeClass("mini-navbar");
              SmoothlyMenu();
            }
          }
        }

        // Inject data content
        if ($(this).data("content")) {
          e.preventDefault();
          ajaxRequestHtml($(this).data("content"));
        }

        $(window).scrollTop(0);
      });
  };

  // navAjax();

  // Start default content
  ajaxRequestHtml(defaultContent);

  // Demo countDown (init in html part)
  // http://www.finalclap.com/faq/194-javascript-compte-rebours-countdown-html

  countdownManager = {
    // Configuration
    targetTime: new Date("2023-11-05 00:00:00"), // Date cible du compte ?? rebours (00:00:00)
    displayElement: {
      // Elements HTML o?? sont affich??s les informations
      day: null,
      hour: null,
      min: null,
      sec: null,
    },

    // Initialisation du compte ?? rebours (?? appeler 1 fois au chargement de la page)
    init: function () {
      // R??cup??ration des r??f??rences vers les ??l??ments pour l'affichage
      // La r??f??rence n'est r??cup??r??e qu'une seule fois ?? l'initialisation pour optimiser les performances
      this.displayElement.day = jQuery("#countdown_day");
      this.displayElement.hour = jQuery("#countdown_hour");
      this.displayElement.min = jQuery("#countdown_min");
      this.displayElement.sec = jQuery("#countdown_sec");

      // Lancement du compte ?? rebours
      this.tick(); // Premier tick tout de suite
      window.setInterval("countdownManager.tick();", 1000); // Ticks suivant, r??p??t?? toutes les secondes (1000 ms)
    },

    // Met ?? jour le compte ?? rebours (tic d'horloge)
    tick: function () {
      // Instant pr??sent
      var timeNow = new Date();

      // On s'assure que le temps restant ne soit jamais n??gatif (ce qui est le cas dans le futur de targetTime)
      if (timeNow > this.targetTime) {
        timeNow = this.targetTime;
      }

      // Calcul du temps restant
      var diff = this.dateDiff(timeNow, this.targetTime);

      this.displayElement.day.text(diff.day);
      this.displayElement.hour.text(diff.hour);
      this.displayElement.min.text(diff.min);
      this.displayElement.sec.text(diff.sec);
    },

    // Calcul la diff??rence entre 2 dates, en jour/heure/minute/seconde
    dateDiff: function (date1, date2) {
      var diff = {}; // Initialisation du retour
      var tmp = date2 - date1;

      tmp = Math.floor(tmp / 1000); // Nombre de secondes entre les 2 dates
      diff.sec = tmp % 60; // Extraction du nombre de secondes
      tmp = Math.floor((tmp - diff.sec) / 60); // Nombre de minutes (partie enti??re)
      diff.min = tmp % 60; // Extraction du nombre de minutes
      tmp = Math.floor((tmp - diff.min) / 60); // Nombre d'heures (enti??res)
      diff.hour = tmp % 24; // Extraction du nombre d'heures
      tmp = Math.floor((tmp - diff.hour) / 24); // Nombre de jours restants
      diff.day = tmp;

      return diff;
    },
  };
})(jQuery);
