jQuery(document).ready(function ($) {

    $('.social-icon').each(function() {
        $(this).hover(function (event) {
            handleMouseEvent(event.type, $(this))
        });

        function handleMouseEvent(action, elem) {
            let _icon        = elem;
            let _className   = _icon.attr('class').split(' ')[1];
            let image        = _icon.find('img');

            switch(_className) {
                case "linkedin":
                    action === "mouseenter" ? elem.addClass('linkedin-color') : elem.removeClass('linkedin-color');
                    break;
                case "github":
                    action === "mouseenter" ? elem.addClass('github-color') : elem.removeClass('github-color');
                    break;
                case "twitter":
                    action === "mouseenter" ? elem.addClass('twitter-color') : elem.removeClass('twitter-color');
                    break;
                case "facebook":
                    action === "mouseenter" ? elem.addClass('facebook-color') : elem.removeClass('facebook-color');
                    break;
            }

            if(action === "mouseenter") {
                gsap.to(image, {duration: .1, y: -20, opacity: 0, onComplete() {
                        gsap.to(image, {duration: .1, y: 20, onComplete() {
                                image.attr('src', '/helloworld/icons/' + _className + '-white.svg');
                                gsap.to(image, {duration: .1, y: 0, opacity: 1});
                            }
                        });
                    }
                });
            } else {
                gsap.to(image, {duration: .1, y: 20, opacity: 0, onComplete() {
                        gsap.to(image, {duration: .1, y: -20, onComplete() {
                                image.attr('src', '/helloworld/icons/' + _className + '-grey.svg');
                                gsap.to(image, {duration: .1, y: 0, opacity: 1});
                            }
                        });
                    }
                });
            }

        }

    });

});