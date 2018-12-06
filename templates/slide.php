<?php
    /* Template Name: Slide Liquido */ 
    get_header("home");
?>

    <svg class="hidden">
			<symbol id="icon-arrow" viewBox="0 0 24 24">
				<title>arrow</title>
				<polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "/>
			</symbol>
			<symbol id="icon-drop" viewBox="0 0 24 24">
				<title>drop</title>
				<path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z"/><path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z"/>
			</symbol>
			<symbol id="icon-github" viewBox="0 0 32.6 31.8">
				<title>github</title>
				<path d="M16.3,0C7.3,0,0,7.3,0,16.3c0,7.2,4.7,13.3,11.1,15.5c0.8,0.1,1.1-0.4,1.1-0.8c0-0.4,0-1.4,0-2.8c-4.5,1-5.5-2.2-5.5-2.2c-0.7-1.9-1.8-2.4-1.8-2.4c-1.5-1,0.1-1,0.1-1c1.6,0.1,2.5,1.7,2.5,1.7c1.5,2.5,3.8,1.8,4.7,1.4c0.1-1.1,0.6-1.8,1-2.2c-3.6-0.4-7.4-1.8-7.4-8.1c0-1.8,0.6-3.2,1.7-4.4C7.4,10.7,6.8,9,7.7,6.8c0,0,1.4-0.4,4.5,1.7c1.3-0.4,2.7-0.5,4.1-0.5c1.4,0,2.8,0.2,4.1,0.5c3.1-2.1,4.5-1.7,4.5-1.7c0.9,2.2,0.3,3.9,0.2,4.3c1,1.1,1.7,2.6,1.7,4.4c0,6.3-3.8,7.6-7.4,8c0.6,0.5,1.1,1.5,1.1,3c0,2.2,0,3.9,0,4.5c0,0.4,0.3,0.9,1.1,0.8c6.5-2.2,11.1-8.3,11.1-15.5C32.6,7.3,25.3,0,16.3,0z"/>
			</symbol>
			<symbol id="icon-arrow-nav" viewBox="208.3 352 4.2 6.4">
				<title>arrow-nav</title>
				<polygon points="212.1,357.3 211.5,358 208.7,355.1 211.5,352.3 212.1,353 209.9,355.1"></polygon>
			</symbol>
		</svg>

    <main class="site-wrapper">

        <div class="content">
            <div class="slide-wrapper">
                <div class="slide-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/slide-2.jpg" class="slide-item__image">
                </div>

                <div class="slide-item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/slide-1.jpg" class="slide-item__image">
                </div>

            </div>
            <button class="scene-nav scene-nav--prev" data-nav="previous"><svg class="icon icon--arrow-nav-prev"><use xlink:href="#icon-arrow-nav"></use></svg></button>
            <button class="scene-nav scene-nav--next" data-nav="next"><svg class="icon icon--arrow-nav-next"><use xlink:href="#icon-arrow-nav"></use></svg></button>
        </div>
    </main>


    <script>
        var spriteImages = document.querySelectorAll('.slide-item__image');
        var spriteImagesSrc = [];

        for (var i = 0; i < spriteImages.length; i++) {
            var img = spriteImages[i];
            spriteImagesSrc.push(img.getAttribute('src'));
        }

        var initCanvasSlideshow = new CanvasSlideshow({
            sprites: spriteImagesSrc,
            displacementImage: '<?php echo get_stylesheet_directory_uri(); ?>/img/dmaps/2048x2048/clouds.jpg',
            autoPlay: true,
            autoPlaySpeed: [10, 3],
            displaceScale: [200, 70]
        });

    </script>
